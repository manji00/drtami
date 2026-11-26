<?php

add_action('init', static function (): void {
    register_post_type('drtami_review', [
        'labels' => [
            'name' => 'Recenzii',
            'singular_name' => 'Recenzie',
        ],
        'public' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => ['title', 'editor'],
        'map_meta_cap' => true,
    ]);
});

add_action('init', static function (): void {
    $multilingual = function_exists('pll_set_post_language') && function_exists('pll_save_post_translations');
    $version = $multilingual ? 'multilingual' : 'ro';
    if (get_option('drtami_review_pages') === $version) return;

    $pages = ['ro' => ['Recenzii', 'recenzii']];
    if ($multilingual) {
        $languages = pll_languages_list(['fields' => 'slug']);
        foreach (['en' => ['Reviews', 'reviews'], 'de' => ['Bewertungen', 'bewertungen']] as $lang => $page) {
            if (in_array($lang, $languages, true)) $pages[$lang] = $page;
        }
    }

    $translations = [];
    foreach ($pages as $lang => [$title, $slug]) {
        if (!empty($translations[$lang])) continue;
        $existing = get_page_by_path($slug, OBJECT, 'page');
        if ($multilingual && $existing && pll_get_post_language($existing->ID) && pll_get_post_language($existing->ID) !== $lang) return;
        $id = $existing ? (int) $existing->ID : wp_insert_post([
            'post_type' => 'page',
            'post_status' => 'publish',
            'post_title' => $title,
            'post_name' => $slug,
        ], true);
        if (is_wp_error($id) || !$id) return;
        if ($multilingual) {
            pll_set_post_language($id, $lang);
            if ($lang === 'ro') $translations = pll_get_post_translations($id);
        }
        $translations[$lang] = $id;
    }

    if ($multilingual && count($translations) > 1) pll_save_post_translations($translations);
    if (!$multilingual || count($pages) === 3) update_option('drtami_review_pages', $version, false);
}, 41);

add_action('admin_post_nopriv_drtami_review', 'drtami_submit_review');
add_action('admin_post_drtami_review', 'drtami_submit_review');

function drtami_submit_review(): void {
    $read = static function (string $key): string {
        return is_string($_POST[$key] ?? null) ? wp_unslash($_POST[$key]) : '';
    };
    $page_id = absint($read('review_page'));
    $page_url = $page_id ? get_permalink($page_id) : false;
    $back = $page_url ?: drtami_page_url('recenzii');
    $redirect = static function (string $status) use ($back): void {
        wp_safe_redirect(add_query_arg('review_status', $status, $back), 303);
        exit;
    };

    $rating = $read('rating');
    $message = sanitize_textarea_field($read('message'));
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST' ||
        !wp_verify_nonce(sanitize_text_field($read('drtami_nonce')), 'drtami_review_' . $page_id) ||
        !in_array($rating, ['1', '2', '3', '4', '5'], true) || preg_match('/\A.{0,1500}\z/su', $message) !== 1) {
        $redirect('invalid');
    }
    if ($read('website') !== '') $redirect('received');

    $key = 'drtami_review_' . md5((string) ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));
    if (get_transient($key)) $redirect('wait');

    $id = wp_insert_post([
        'post_type' => 'drtami_review',
        'post_status' => 'pending',
        'post_title' => sprintf('Recenzie – %d/5', (int) $rating),
        'post_content' => wp_slash($message),
        'meta_input' => ['_drtami_rating' => (int) $rating],
    ], true);
    if (is_wp_error($id) || !$id) $redirect('error');

    set_transient($key, 1, MINUTE_IN_SECONDS);
    $redirect('received');
}
