<?php
/**
 * Plugin Name: Dr. Tami – Websiteverwaltung
 * Description: Einfache Pflege von Texten, Kontaktdaten und Bildern ohne Code.
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Text Domain: drtami-core
 */
defined('ABSPATH') || exit;

function drtami_core_fields(): array {
    return [
        'home' => [
            'Grijă pentru cei mici.' => 'Startseite – Überschrift 1',
            'Liniște pentru părinți.' => 'Startseite – Überschrift 2',
            'Oncologie și Hematologie Pediatrică — consultații cu atenție, empatie și o abordare individualizată, pentru fiecare copil și familie.' => 'Startseite – Einleitung',
            'Sunt medic specialist în Oncologie și Hematologie Pediatrică. Cred că fiecare copil merită să fie ascultat, iar fiecare părinte merită răspunsuri clare și sprijin.' => 'Startseite – Kurzvorstellung',
        ],
        'about' => [
            'O relație bazată pe încredere, respect și siguranță pentru fiecare copil și familie.' => 'Über mich – Einleitung',
            'Îmi doresc să ofer fiecărui copil îngrijire medicală atentă și individualizată, într-un mediu bazat pe încredere, respect și siguranță.' => 'Über mich – Persönlicher Text',
        ],
        'contact' => [
            'Pentru programări și informații, alege metoda de contact potrivită pentru tine.' => 'Kontakt – Einleitung',
        ],
    ];
}
function drtami_core_option(): array {
    $value = get_option('drtami_core_content', []);
    return is_array($value) ? $value : [];
}
function drtami_core_override(string $translated, string $source, string $language): string {
    $data = drtami_core_option();
    $value = $data['texts'][$language][md5($source)] ?? '';
    return is_string($value) && trim($value) !== '' ? $value : $translated;
}
add_filter('drtami_translation', 'drtami_core_override', 10, 3);

function drtami_core_detail(string $key, string $fallback): string {
    $data = drtami_core_option();
    $value = $data['details'][$key] ?? '';
    return is_string($value) && trim($value) !== '' ? $value : $fallback;
}
function drtami_core_image(string $slot, string $fallback): string {
    $data = drtami_core_option();
    $id = absint($data['images'][$slot] ?? 0);
    $url = $id ? wp_get_attachment_image_url($id, 'full') : false;
    return $url ?: $fallback;
}
add_action('admin_menu', static function (): void {
    add_menu_page('Dr. Tami – Website', 'Meine Website', 'edit_pages', 'drtami-core', 'drtami_core_admin', 'dashicons-heart', 3);
});
add_action('admin_enqueue_scripts', static function (string $hook): void {
    if ($hook !== 'toplevel_page_drtami-core') return;
    wp_enqueue_media();
    wp_enqueue_script('drtami-core-admin', plugin_dir_url(__FILE__) . 'admin.js', ['jquery'], '1.0.0', true);
});
add_action('admin_post_drtami_core_save', static function (): void {
    if (!current_user_can('edit_pages')) wp_die('Keine Berechtigung.');
    check_admin_referer('drtami_core_save');
    $raw = isset($_POST['drtami_core']) && is_array($_POST['drtami_core']) ? wp_unslash($_POST['drtami_core']) : [];
    $current = drtami_core_option();
    $clean = ['texts' => [], 'details' => [], 'images' => []];
    foreach (['ro', 'en', 'de'] as $lang) {
        foreach (drtami_core_fields() as $fields) foreach ($fields as $source => $label) {
            $value = $raw['texts'][$lang][md5($source)] ?? '';
            $clean['texts'][$lang][md5($source)] = is_string($value) ? sanitize_textarea_field($value) : '';
        }
    }
    foreach (['phone', 'email', 'address', 'price', 'duration'] as $key) {
        $value = $raw['details'][$key] ?? '';
        $clean['details'][$key] = is_string($value) ? ($key === 'email' ? sanitize_email($value) : sanitize_text_field($value)) : '';
    }
    foreach (['hero', 'about_preview', 'about_portrait', 'article_home', 'article_list'] as $key) {
        $id = absint($raw['images'][$key] ?? 0);
        $clean['images'][$key] = $id && get_post_type($id) === 'attachment' && wp_attachment_is_image($id) ? $id : 0;
    }
    update_option('drtami_core_content', $clean, false);
    wp_safe_redirect(add_query_arg(['page' => 'drtami-core', 'saved' => '1'], admin_url('admin.php')));
    exit;
});
function drtami_core_admin(): void {
    if (!current_user_can('edit_pages')) return;
    $data = drtami_core_option();
    $groups = ['home' => 'Startseite', 'about' => 'Über mich', 'contact' => 'Kontakt'];
    $details = ['phone' => ['Telefon / WhatsApp', '+40 750 436 379'], 'email' => ['E-Mail', 'cheschestamara@gmail.com'], 'address' => ['Ordinationsadresse', 'Aleea Florin Ciungan nr. 17, București (zona Dristor)'], 'price' => ['Preis / RON', '400'], 'duration' => ['Dauer der Konsultation', '45–60']];
    $images = ['hero' => 'Startseite – Hauptbild', 'about_preview' => 'Startseite – Portrait', 'about_portrait' => 'Über mich – Portrait', 'article_home' => 'Startseite – Artikelbild', 'article_list' => 'Artikelübersicht – Bild'];
    ?>
    <div class="wrap" style="max-width:1000px">
      <h1>Meine Website verwalten</h1>
      <p>Hier kannst du wichtige Texte, Kontaktdaten und Fotos selbst ändern. Leere Textfelder verwenden automatisch die bisherige Übersetzung. Änderungen werden sofort veröffentlicht.</p>
      <?php if (isset($_GET['saved'])): ?><div class="notice notice-success is-dismissible"><p>Änderungen gespeichert.</p></div><?php endif; ?>
      <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
        <input type="hidden" name="action" value="drtami_core_save">
        <?php wp_nonce_field('drtami_core_save'); ?>
        <h2>Kontaktdaten und Preise</h2>
        <table class="form-table"><?php foreach ($details as $key => [$label, $default]): ?>
          <tr><th><label for="dt-<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></label></th>
          <td><input class="regular-text" id="dt-<?php echo esc_attr($key); ?>" name="drtami_core[details][<?php echo esc_attr($key); ?>]" value="<?php echo esc_attr($data['details'][$key] ?? ''); ?>" placeholder="<?php echo esc_attr($default); ?>"></td></tr>
        <?php endforeach; ?></table>
        <h2>Bilder</h2><p>„Bild auswählen“ öffnet die WordPress-Mediathek. Ohne Auswahl bleibt das bisherige Platzhalterbild.</p>
        <table class="form-table"><?php foreach ($images as $key => $label):
            $id = absint($data['images'][$key] ?? 0); $preview = $id ? wp_get_attachment_image_url($id, 'thumbnail') : '';
        ?><tr><th><?php echo esc_html($label); ?></th><td>
          <div class="dt-image-control">
            <input type="hidden" name="drtami_core[images][<?php echo esc_attr($key); ?>]" value="<?php echo esc_attr($id); ?>">
            <img class="dt-preview" src="<?php echo esc_url($preview ?: ''); ?>" alt="" style="max-width:150px;max-height:100px;display:<?php echo $preview ? 'block' : 'none'; ?>;margin-bottom:8px">
            <button type="button" class="button dt-select">Bild auswählen</button>
            <button type="button" class="button dt-remove">Bild entfernen</button>
          </div>
        </td></tr><?php endforeach; ?></table>
        <h2>Seitentexte</h2><p>Wähle die gewünschte Sprache. Rumänisch, Englisch und Deutsch werden unabhängig voneinander gespeichert.</p>
        <?php foreach ($groups as $group => $title): ?>
          <h3><?php echo esc_html($title); ?></h3>
          <?php foreach (drtami_core_fields()[$group] as $source => $label): ?>
            <div style="padding:12px 16px;margin:10px 0;background:#fff;border:1px solid #ddd;border-radius:6px">
              <strong><?php echo esc_html($label); ?></strong>
              <?php foreach (['ro' => 'Rumänisch', 'en' => 'Englisch', 'de' => 'Deutsch'] as $lang => $language): ?>
                <p><label><?php echo esc_html($language); ?><br>
                <textarea class="large-text" rows="2" name="drtami_core[texts][<?php echo esc_attr($lang); ?>][<?php echo esc_attr(md5($source)); ?>]" placeholder="<?php echo esc_attr($lang === 'ro' ? $source : 'Leer = bisherige Übersetzung'); ?>"><?php echo esc_textarea($data['texts'][$lang][md5($source)] ?? ''); ?></textarea>
                </label></p>
              <?php endforeach; ?>
            </div>
          <?php endforeach; ?>
        <?php endforeach; ?>
        <?php submit_button('Änderungen speichern'); ?>
      </form>
      <p><a href="<?php echo esc_url(admin_url('edit.php')); ?>">Artikel verwalten</a> · <a href="<?php echo esc_url(admin_url('upload.php')); ?>">Mediathek öffnen</a> · <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" rel="noopener noreferrer">Website ansehen</a></p>
    </div>
    <?php
}
