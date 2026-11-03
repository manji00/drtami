<?php
declare(strict_types=1);
require_once get_theme_file_path('/inc/i18n.php');

add_action('after_setup_theme', static function (): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script']);
});

add_action('wp_enqueue_scripts', static function (): void {
    wp_enqueue_style('drtami-fonts', 'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=DM+Serif+Display&display=swap', [], null);
    wp_enqueue_style('drtami-main', get_theme_file_uri('/assets/css/main.css'), ['drtami-fonts'], '0.2.0');
    wp_enqueue_script('drtami-main', get_theme_file_uri('/assets/js/main.js'), [], '0.2.0', true);
});

function drtami_page_url(string $slug): string {
    $page = get_page_by_path($slug);
    return $page ? get_permalink($page) : home_url('/' . $slug . '/');
}

/** Initial content is created once; subsequent edits in WordPress are never overwritten. */
add_action('init', static function (): void {
    if (get_option('drtami_seed_version') === '1') {
        return;
    }
    $pages = [
        'despre-mine' => 'Despre mine',
        'contact' => 'Contact',
        'intrebari-frecvente' => 'Întrebări frecvente',
        'articole' => 'Articole',
    ];
    foreach ($pages as $slug => $title) {
        if (!get_page_by_path($slug)) {
            wp_insert_post([
                'post_type' => 'page',
                'post_status' => 'publish',
                'post_title' => $title,
                'post_name' => $slug,
                'post_content' => '',
            ]);
        }
    }
    if (!get_page_by_path('cand-este-recomandat-un-consult-la-hematologul-pediatru', OBJECT, 'post')) {
        wp_insert_post([
            'post_type' => 'post',
            'post_status' => 'publish',
            'post_title' => 'Când este recomandat un consult la hematologul pediatru?',
            'post_name' => 'cand-este-recomandat-un-consult-la-hematologul-pediatru',
            'post_content' => '',
        ]);
    }
    update_option('drtami_seed_version', '1', false);
}, 20);

/** Contact form: nonce, honeypot, validation, throttling and Post/Redirect/Get. */
add_action('admin_post_nopriv_drtami_contact', 'drtami_handle_contact');
add_action('admin_post_drtami_contact', 'drtami_handle_contact');

function drtami_handle_contact(): void {
    $back = drtami_page_url('contact');
    if (!isset($_POST['drtami_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['drtami_nonce'])), 'drtami_contact')) {
        wp_safe_redirect(add_query_arg('status', 'invalid', $back)); exit;
    }
    if (!empty($_POST['website'])) {
        wp_safe_redirect(add_query_arg('status', 'sent', $back)); exit;
    }
    $name = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
    $email = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $message = sanitize_textarea_field(wp_unslash($_POST['message'] ?? ''));
    $consent = !empty($_POST['consent']);
    if (!$consent || $name === '' || !is_email($email) || $message === '' || mb_strlen($message) > 3000) {
        wp_safe_redirect(add_query_arg('status', 'invalid', $back)); exit;
    }
    $key = 'drtami_contact_' . md5((string) ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));
    if (get_transient($key)) {
        wp_safe_redirect(add_query_arg('status', 'wait', $back)); exit;
    }
    set_transient($key, 1, MINUTE_IN_SECONDS);
    $body = "Nume: {$name}\nEmail: {$email}\n\nMesaj:\n{$message}";
    $sent = wp_mail('cheschestamara@gmail.com', 'Mesaj nou de pe site-ul Dr. Tami', $body, [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $email,
    ]);
    wp_safe_redirect(add_query_arg('status', $sent ? 'sent' : 'error', $back)); exit;
}


/** Remove only WordPress's untouched default Hello world! sample post, once. */
add_action('init', static function (): void {
    if (get_option('drtami_hello_cleanup_v1')) return;
    $sample = get_page_by_path('hello-world', OBJECT, 'post');
    if ($sample && trim((string) $sample->post_title) === 'Hello world!' &&
        trim(wp_strip_all_tags((string) $sample->post_content)) === 'Welcome to WordPress. This is your first post. Edit or delete it, then start writing!') {
        wp_delete_post((int) $sample->ID, true);
    }
    update_option('drtami_hello_cleanup_v1', '1', false);
}, 25);

/**
 * Translated pages use the generic page.php, rendering their translated
 * WordPress content instead of accidentally displaying Romanian static copy.
 * The article listing is handled by the localized page-articole.php template.
 */
add_filter('template_include', static function (string $template): string {
    if (!is_page() || !function_exists('pll_get_post') || drtami_language() === 'ro') return $template;
    $romanian = pll_get_post(get_queried_object_id(), 'ro');
    if (!$romanian) return $template;
    $slug = get_post_field('post_name', $romanian);
    if ($slug === 'articole') return get_theme_file_path('/page-articole.php');
    if (in_array($slug, ['despre-mine', 'contact', 'intrebari-frecvente'], true)) return get_theme_file_path('/page.php');
    return $template;
}, 50);
