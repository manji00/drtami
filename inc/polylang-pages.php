<?php
/**
 * One-time, non-destructive Polylang setup for the theme's file-based pages.
 * Never overwrites existing pages, translations, or edited articles.
 */
add_action('init', static function (): void {
    if (!function_exists('pll_set_post_language') || !function_exists('pll_save_post_translations')) return;
    if (get_option('drtami_multilingual_pages_v1') === '1') return;
    if (function_exists('pll_languages_list')) {
        $available = pll_languages_list(['fields' => 'slug']);
        if (array_diff(['ro', 'en', 'de'], $available)) return;
    }
    $pages = [
        'despre-mine' => ['en' => ['About me', 'about-me'], 'de' => ['Über mich', 'ueber-mich']],
        'contact' => ['en' => ['Contact', 'contact-en'], 'de' => ['Kontakt', 'kontakt']],
        'intrebari-frecvente' => ['en' => ['Frequently asked questions', 'faq'], 'de' => ['Häufige Fragen', 'haeufige-fragen']],
        'articole' => ['en' => ['Articles', 'articles'], 'de' => ['Artikel', 'artikel']],
    ];
    foreach ($pages as $original_slug => $locales) {
        $original = get_page_by_path($original_slug, OBJECT, 'page');
        if (!$original) continue;
        $translations = function_exists('pll_get_post_translations') ? pll_get_post_translations($original->ID) : [];
        if (empty($translations['ro'])) {
            pll_set_post_language($original->ID, 'ro');
            $translations['ro'] = (int) $original->ID;
        }
        foreach ($locales as $lang => [$title, $slug]) {
            if (!empty($translations[$lang])) continue;
            $existing = get_page_by_path($slug, OBJECT, 'page');
            if ($existing && function_exists('pll_get_post_language') && pll_get_post_language($existing->ID) !== $lang) continue;
            $id = $existing ? (int) $existing->ID : wp_insert_post([
                'post_type' => 'page',
                'post_status' => 'publish',
                'post_title' => $title,
                'post_name' => $slug,
                'post_content' => '',
            ], true);
            if (is_wp_error($id) || !$id) continue;
            pll_set_post_language((int) $id, $lang);
            $translations[$lang] = (int) $id;
        }
        if (count($translations) > 1) pll_save_post_translations($translations);
    }
    $article = get_page_by_path('cand-este-recomandat-un-consult-la-hematologul-pediatru', OBJECT, 'post');
    if ($article && function_exists('drtami_initial_article_translation')) {
        $linked = function_exists('pll_get_post_translations') ? pll_get_post_translations($article->ID) : [];
        if (empty($linked['ro'])) {
            pll_set_post_language($article->ID, 'ro');
            $linked['ro'] = (int) $article->ID;
        }
        $titles = [
            'en' => ['When should a child see a pediatric hematologist?', 'when-to-see-a-pediatric-hematologist'],
            'de' => ['Wann ist eine kinderhämatologische Untersuchung sinnvoll?', 'wann-zum-kinderhaematologen'],
        ];
        foreach ($titles as $lang => [$title, $slug]) {
            if (!empty($linked[$lang])) continue;
            $existing = get_page_by_path($slug, OBJECT, 'post');
            if ($existing && function_exists('pll_get_post_language') && pll_get_post_language($existing->ID) !== $lang) continue;
            $id = $existing ? (int) $existing->ID : wp_insert_post([
                'post_type' => 'post',
                'post_status' => 'publish',
                'post_title' => $title,
                'post_name' => $slug,
                'post_content' => drtami_initial_article_translation($lang),
            ], true);
            if (is_wp_error($id) || !$id) continue;
            pll_set_post_language((int) $id, $lang);
            $linked[$lang] = (int) $id;
        }
        if (count($linked) > 1) pll_save_post_translations($linked);
    }
    update_option('drtami_multilingual_pages_v1', '1', false);
}, 40);
