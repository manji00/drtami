<?php
/** Site language publication controls. Romanian is always public. */
function drtami_public_languages(): array {
    $enabled = get_option('drtami_public_languages', ['ro', 'en', 'de']);
    if (!is_array($enabled)) $enabled = ['ro'];
    return array_values(array_intersect(['ro', 'en', 'de'], array_merge(['ro'], $enabled)));
}
function drtami_language_is_public(string $language): bool {
    return in_array($language, drtami_public_languages(), true);
}
add_action('admin_menu', static function (): void {
    add_options_page('Website-Sprachen', 'Website-Sprachen', 'manage_options', 'drtami-languages', 'drtami_render_language_settings');
});
add_action('admin_init', static function (): void {
    register_setting('drtami_language_settings', 'drtami_public_languages', [
        'type' => 'array',
        'default' => ['ro', 'en', 'de'],
        'sanitize_callback' => static function ($value): array {
            if (!is_array($value)) return ['ro'];
            return array_values(array_intersect(['ro', 'en', 'de'], array_merge(['ro'], array_map('sanitize_key', $value))));
        },
    ]);
});
function drtami_render_language_settings(): void {
    if (!current_user_can('manage_options')) return;
    $enabled = drtami_public_languages();
    ?>
    <div class="wrap">
      <h1>Website-Sprachen</h1>
      <p>Bestimme, welche Sprachen öffentlich erreichbar sind. Rumänisch bleibt immer aktiv. Übersetzungen und Polylang-Einstellungen werden nicht gelöscht.</p>
      <form method="post" action="options.php">
        <?php settings_fields('drtami_language_settings'); ?>
        <table class="form-table" role="presentation">
          <tr><th>Rumänisch (RO)</th><td><input type="checkbox" checked disabled> Immer aktiv</td></tr>
          <?php foreach (['en' => 'Englisch (EN)', 'de' => 'Deutsch (DE)'] as $code => $label): ?>
          <tr><th><?php echo esc_html($label); ?></th><td><label><input type="checkbox" name="drtami_public_languages[]" value="<?php echo esc_attr($code); ?>" <?php checked(in_array($code, $enabled, true)); ?>> Öffentlich aktiv</label></td></tr>
          <?php endforeach; ?>
        </table>
        <?php submit_button('Sprachen speichern'); ?>
      </form>
      <p><strong>Hinweis:</strong> Deaktivierte Sprachseiten leiten Besucher auf die entsprechende rumänische Seite um. Suchmaschinen erhalten eine temporäre Weiterleitung (302). Nach einer späteren Reaktivierung sind die ursprünglichen Inhalte wieder verfügbar.</p>
    </div>
    <?php
}
/** Hide unpublished languages from Polylang's language switcher. */
add_filter('pll_the_languages', static function ($output, $args) {
    // Polylang's raw switcher output is filtered via pll_the_languages.
    if (empty($args['raw']) || !is_array($output)) return $output;
    return array_filter($output, static function ($item): bool {
        return is_array($item) && drtami_language_is_public((string) ($item['slug'] ?? ''));
    });
}, 10, 2);
/** Prevent indexing or visiting disabled language URLs. */
add_action('template_redirect', static function (): void {
    if (is_admin() || wp_doing_ajax() || is_preview()) return;
    if (!function_exists('pll_current_language')) return;
    $lang = pll_current_language('slug');
    if (!$lang || drtami_language_is_public($lang)) return;
    $target = home_url('/');
    if (function_exists('pll_home_url')) $target = pll_home_url('ro');
    if (is_singular() && function_exists('pll_get_post')) {
        $romanian_id = pll_get_post(get_queried_object_id(), 'ro');
        if ($romanian_id) $target = get_permalink($romanian_id);
    } elseif ((is_category() || is_tag() || is_tax()) && function_exists('pll_get_term')) {
        $romanian_term = pll_get_term(get_queried_object_id(), 'ro');
        if ($romanian_term) {
            $url = get_term_link($romanian_term);
            if (!is_wp_error($url)) $target = $url;
        }
    }
    wp_safe_redirect($target, 302);
    exit;
}, 1);
