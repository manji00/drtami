<?php
/**
 * Plugin Name: Dr. Tami – Website Manager
 * Description: Easily manage site content, contact details, FAQs and images without code.
 * Version: 1.2.0
 * Requires PHP: 7.4
 * Text Domain: drtami-core
 */
defined('ABSPATH') || exit;

function drtami_core_fields(): array {
    return [
        'home' => [
            'Grijă pentru cei mici.' => 'Homepage – Main heading',
            'Liniște pentru părinți.' => 'Homepage – Second heading',
            "Oncologie și Hematologie Pediatrică — consultații cu atenție, empatie și o abordare individualizată, pentru fiecare copil și familie." => "Oncologie și Hematologie Pediatrică — consultații cu atenție, empatie și o abordare indivi…",
            "Evaluare, diagnostic, monitorizare și îndrumare medicală pentru copii și adolescenți." => "Evaluare, diagnostic, monitorizare și îndrumare medicală pentru copii și adolescenți.",
            "Evaluarea anemiilor, modificărilor hemoleucogramei, tulburărilor de coagulare și a altor afecțiuni hematologice." => "Evaluarea anemiilor, modificărilor hemoleucogramei, tulburărilor de coagulare și a altor a…",
            "Evaluarea simptomelor și a suspiciunilor oncologice, monitorizare și îndrumare după tratament." => "Evaluarea simptomelor și a suspiciunilor oncologice, monitorizare și îndrumare după tratam…",
            "Interpretarea analizelor, a doua opinie medicală și explicații clare pentru părinți." => "Interpretarea analizelor, a doua opinie medicală și explicații clare pentru părinți.",
            "Sunt medic specialist în Oncologie și Hematologie Pediatrică. Cred că fiecare copil merită să fie ascultat, iar fiecare părinte merită răspunsuri clare și sprijin." => "Sunt medic specialist în Oncologie și Hematologie Pediatrică. Cred că fiecare copil merită…",
            "Îmi doresc să ofer îngrijire atentă și individualizată, într-un mediu bazat pe încredere, respect și siguranță." => "Îmi doresc să ofer îngrijire atentă și individualizată, într-un mediu bazat pe încredere, …",
            "Semne și simptome care merită evaluate de un specialist și informații utile pentru părinți." => "Semne și simptome care merită evaluate de un specialist și informații utile pentru părinți…",
            "Pentru întrebări sau programări, mă poți contacta telefonic, prin WhatsApp sau prin formular." => "Pentru întrebări sau programări, mă poți contacta telefonic, prin WhatsApp sau prin formul…",
        ],
        'about' => [
            'O relație bazată pe încredere, respect și siguranță pentru fiecare copil și familie.' => 'About me – Introduction',
            "O relație bazată pe încredere, respect și siguranță pentru fiecare copil și familie." => "O relație bazată pe încredere, respect și siguranță pentru fiecare copil și familie.",
            " și sunt Medic specialist Oncologie și Hematologie Pediatrică." => " și sunt Medic specialist Oncologie și Hematologie Pediatrică.",
            "Am absolvit Universitatea de Medicină și Farmacie „Carol Davila” din București în anul 2020, iar în noiembrie 2025 am finalizat pregătirea prin rezidențiat în specialitatea Oncologie și Hematologie Pediatrică." => "Am absolvit Universitatea de Medicină și Farmacie „Carol Davila” din București în anul 202…",
            "În prezent, sunt doctorand în cadrul Catedrei de Psihologie Medicală a Universității de Medicină și Farmacie „Carol Davila” din București, domeniu care îmi oferă o perspectivă mai amplă asupra relației dintre medic, copil și familie." => "În prezent, sunt doctorand în cadrul Catedrei de Psihologie Medicală a Universității de Me…",
            "Îmi doresc să ofer fiecărui copil îngrijire medicală atentă și individualizată, într-un mediu bazat pe încredere, respect și siguranță." => "Îmi doresc să ofer fiecărui copil îngrijire medicală atentă și individualizată, într-un me…",
            "Oncologia și hematologia pediatrică este specialitatea medicală care se ocupă cu diagnosticul, monitorizarea și tratamentul afecțiunilor sângelui și ale organelor hematopoietice, precum și al bolilor oncologice care apar în copilărie și adolescență." => "Oncologia și hematologia pediatrică este specialitatea medicală care se ocupă cu diagnosti…",
            "Domeniul hematologiei pediatrice include o gamă largă de afecțiuni, de la anemii, tulburări ale coagulării și trombocitopenii, până la boli hematologice mai rare și complexe." => "Domeniul hematologiei pediatrice include o gamă largă de afecțiuni, de la anemii, tulburăr…",
            "Oncologia pediatrică se ocupă de diagnosticul și tratamentul cancerelor copilăriei, precum leucemiile, limfoamele, tumorile cerebrale și alte tumori solide." => "Oncologia pediatrică se ocupă de diagnosticul și tratamentul cancerelor copilăriei, precum…",
            "Un aspect esențial al acestei specialități este abordarea multidisciplinară, care presupune colaborarea dintre medici din diferite specialități, pentru a oferi fiecărui copil cele mai bune șanse de diagnostic, tratament și recuperare." => "Un aspect esențial al acestei specialități este abordarea multidisciplinară, care presupun…",
            "În cadrul specialității de Oncologie și Hematologie Pediatrică, ofer evaluare, diagnostic, monitorizare și îndrumare medicală pentru copii și adolescenți cu suspiciune sau diagnostic de afecțiuni hematologice și oncologice." => "În cadrul specialității de Oncologie și Hematologie Pediatrică, ofer evaluare, diagnostic,…",
            "Evaluarea și investigarea anemiei (anemie feriprivă, anemii hemolitice și alte tipuri de anemie)." => "Evaluarea și investigarea anemiei (anemie feriprivă, anemii hemolitice și alte tipuri de a…",
            "Evaluarea modificărilor hemoleucogramei (hemoglobină, leucocite, trombocite)." => "Evaluarea modificărilor hemoleucogramei (hemoglobină, leucocite, trombocite).",
            "Evaluarea trombocitopeniei și a numărului crescut de trombocite." => "Evaluarea trombocitopeniei și a numărului crescut de trombocite.",
            "Investigarea tulburărilor de coagulare și a manifestărilor hemoragice." => "Investigarea tulburărilor de coagulare și a manifestărilor hemoragice.",
            "Evaluarea vânătăilor spontane, a peteșiilor și a sângerărilor recurente." => "Evaluarea vânătăilor spontane, a peteșiilor și a sângerărilor recurente.",
            "Investigarea modificărilor persistente ale globulelor albe." => "Investigarea modificărilor persistente ale globulelor albe.",
            "Monitorizarea copiilor cu afecțiuni hematologice cunoscute." => "Monitorizarea copiilor cu afecțiuni hematologice cunoscute.",
            "Evaluarea copiilor cu semne și simptome sugestive pentru o afecțiune oncologică." => "Evaluarea copiilor cu semne și simptome sugestive pentru o afecțiune oncologică.",
            "Evaluarea adenopatiilor persistente sau cu aspect clinic suspect." => "Evaluarea adenopatiilor persistente sau cu aspect clinic suspect.",
            "Investigarea febrei prelungite și a simptomelor generale fără o cauză identificată." => "Investigarea febrei prelungite și a simptomelor generale fără o cauză identificată.",
            "Evaluarea modificărilor biologice care pot ridica suspiciunea unei afecțiuni oncologice." => "Evaluarea modificărilor biologice care pot ridica suspiciunea unei afecțiuni oncologice.",
            "Evaluarea și îndrumarea copiilor după finalizarea tratamentului oncologic." => "Evaluarea și îndrumarea copiilor după finalizarea tratamentului oncologic.",
            "Interpretarea hemoleucogramei și a analizelor de laborator." => "Interpretarea hemoleucogramei și a analizelor de laborator.",
            "Recomandarea investigațiilor suplimentare necesare pentru stabilirea diagnosticului." => "Recomandarea investigațiilor suplimentare necesare pentru stabilirea diagnosticului.",
            "A doua opinie medicală în cazul afecțiunilor hematologice și oncologice pediatrice." => "A doua opinie medicală în cazul afecțiunilor hematologice și oncologice pediatrice.",
            "Consilierea și informarea părinților cu privire la diagnostic, investigații și opțiunile terapeutice." => "Consilierea și informarea părinților cu privire la diagnostic, investigații și opțiunile t…",
            "Îndrumarea către alte specialități medicale atunci când situația clinică o impune." => "Îndrumarea către alte specialități medicale atunci când situația clinică o impune.",
            "Sunt aici pentru a te ajuta să găsești răspunsuri și îndrumare." => "Sunt aici pentru a te ajuta să găsești răspunsuri și îndrumare.",
        ],
        'contact' => [
            'Pentru programări și informații, alege metoda de contact potrivită pentru tine.' => 'Contact – Introduction',
            "Pentru programări și informații, alege metoda de contact potrivită pentru tine." => "Pentru programări și informații, alege metoda de contact potrivită pentru tine.",
            "copilul (prezență obligatorie) și documentele medicale ale acestuia." => "copilul (prezență obligatorie) și documentele medicale ale acestuia.",
            "Completează formularul, iar mesajul va fi transmis pe e-mail." => "Completează formularul, iar mesajul va fi transmis pe e-mail.",
            "Te rugăm să aștepți un minut înainte de a trimite un alt mesaj." => "Te rugăm să aștepți un minut înainte de a trimite un alt mesaj.",
            "Mesajul nu a putut fi trimis. Te rugăm să folosești telefonul sau e-mailul." => "Mesajul nu a putut fi trimis. Te rugăm să folosești telefonul sau e-mailul.",
            "Sunt de acord ca datele introduse să fie folosite pentru a primi un răspuns la solicitarea mea. " => "Sunt de acord ca datele introduse să fie folosite pentru a primi un răspuns la solicitarea…",
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
    add_menu_page('Dr. Tami – Website', 'My Website', 'drtami_manage_site', 'drtami-core', 'drtami_core_admin', 'dashicons-heart', 3);
    add_submenu_page('drtami-core', 'Site Design', 'Site Design', 'drtami_manage_site', 'drtami-design', 'drtami_core_design_admin');
});
add_action('admin_enqueue_scripts', static function (string $hook): void {
    if ($hook !== 'toplevel_page_drtami-core' && $hook !== 'my-website_page_drtami-design' && $hook !== 'drtami-core_page_drtami-design') return;
    wp_enqueue_media();
    wp_enqueue_script('drtami-core-admin', plugin_dir_url(__FILE__) . 'admin.js', ['jquery'], '1.2.0', true);
});
add_action('admin_post_drtami_core_save', static function (): void {
    if (!current_user_can('drtami_manage_site')) wp_die('Permission denied.');
    check_admin_referer('drtami_core_save');
    $raw = isset($_POST['drtami_core']) && is_array($_POST['drtami_core']) ? wp_unslash($_POST['drtami_core']) : [];
    $clean = ['texts' => [], 'details' => [], 'images' => [], 'faq' => []];
    $existing = drtami_core_option();
    $clean['texts'] = is_array($existing['texts'] ?? null) ? $existing['texts'] : [];
    foreach (['ro', 'en', 'de'] as $lang) {
        foreach (drtami_core_fields() as $fields) foreach ($fields as $source => $label) {
            if (!isset($raw['texts'][$lang]) || !array_key_exists(md5($source), (array) $raw['texts'][$lang])) continue;
            $value = $raw['texts'][$lang][md5($source)];
            $clean['texts'][$lang][md5($source)] = is_string($value) ? sanitize_textarea_field($value) : '';
        }
    }
    foreach (['phone', 'email', 'address', 'price', 'duration'] as $key) {
        $value = $raw['details'][$key] ?? '';
        $clean['details'][$key] = is_string($value) ? ($key === 'email' ? sanitize_email($value) : sanitize_text_field($value)) : '';
    }
    foreach (['hero', 'about_preview', 'about_portrait'] as $key) {
        $id = absint($raw['images'][$key] ?? 0);
        $clean['images'][$key] = $id && get_post_type($id) === 'attachment' && wp_attachment_is_image($id) ? $id : 0;
    }
    $questions = $raw['faq'] ?? [];
    if (is_array($questions)) {
        foreach (['ro', 'en', 'de'] as $lang) {
            foreach (array_slice(is_array($questions[$lang] ?? null) ? $questions[$lang] : [], 0, 30) as $entry) {
                if (!is_array($entry)) continue;
                $question = sanitize_text_field((string) ($entry['question'] ?? ''));
                $answer = sanitize_textarea_field((string) ($entry['answer'] ?? ''));
                if ($question !== '' && $answer !== '') $clean['faq'][$lang][] = ['question' => $question, 'answer' => $answer];
            }
        }
    }
    update_option('drtami_core_content', $clean, false);
    wp_safe_redirect(add_query_arg(['page' => 'drtami-core', 'saved' => '1'], admin_url('admin.php')));
    exit;
});
function drtami_core_admin(): void {
    if (!current_user_can('drtami_manage_site')) return;
    $data = drtami_core_option();
    $groups = ['home' => 'Homepage', 'about' => 'About me', 'contact' => 'Contact'];
    $details = ['phone' => ['Phone / WhatsApp', '+40 750 436 379'], 'email' => ['Email', 'cheschestamara@gmail.com'], 'address' => ['Clinic address', 'Aleea Florin Ciungan nr. 17, București (zona Dristor)'], 'price' => ['Consultation fee / RON', '400'], 'duration' => ['Consultation duration (minutes)', '45–60']];
    $images = ['hero' => 'Homepage – Main image', 'about_preview' => 'Homepage – Portrait', 'about_portrait' => 'About me – Portrait'];
    ?>
    <div class="wrap" style="max-width:1000px">
      <h1>Manage My Website</h1>
      <p>Edit your website content, contact information and photos. Leave a text field blank to keep the existing translation. Changes go live when saved.</p>
      <?php if (isset($_GET['saved'])): ?><div class="notice notice-success is-dismissible"><p>Changes saved.</p></div><?php endif; ?>
      <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
        <input type="hidden" name="action" value="drtami_core_save">
        <?php wp_nonce_field('drtami_core_save'); ?>
        <h2>Contact details and fees</h2>
        <table class="form-table"><?php foreach ($details as $key => [$label, $default]): ?>
          <tr><th><label for="dt-<?php echo esc_attr($key); ?>"><?php echo esc_html($label); ?></label></th>
          <td><input class="regular-text" id="dt-<?php echo esc_attr($key); ?>" name="drtami_core[details][<?php echo esc_attr($key); ?>]" value="<?php echo esc_attr($data['details'][$key] ?? ''); ?>" placeholder="<?php echo esc_attr($default); ?>"></td></tr>
        <?php endforeach; ?></table>
        <h2>Images</h2><p>Select images from the WordPress Media Library. Without an image, the current placeholder remains.</p>
        <table class="form-table"><?php foreach ($images as $key => $label):
            $id = absint($data['images'][$key] ?? 0); $preview = $id ? wp_get_attachment_image_url($id, 'thumbnail') : '';
        ?><tr><th><?php echo esc_html($label); ?></th><td>
          <div class="dt-image-control">
            <input type="hidden" name="drtami_core[images][<?php echo esc_attr($key); ?>]" value="<?php echo esc_attr($id); ?>">
            <img class="dt-preview" src="<?php echo esc_url($preview ?: ''); ?>" alt="" style="max-width:150px;max-height:100px;display:<?php echo $preview ? 'block' : 'none'; ?>;margin-bottom:8px">
            <button type="button" class="button dt-select">Choose image</button>
            <button type="button" class="button dt-remove">Remove image</button>
          </div>
        </td></tr><?php endforeach; ?></table>
        <h2>Static page content</h2><p>These pages have fixed layouts. Only change text when needed; articles and FAQs are managed separately. Blank fields retain the existing translations.</p>
        <?php $editable = [
            'home' => ['Grijă pentru cei mici.', 'Liniște pentru părinți.', 'Oncologie și Hematologie Pediatrică — consultații cu atenție, empatie și o abordare individualizată, pentru fiecare copil și familie.', 'Sunt medic specialist în Oncologie și Hematologie Pediatrică. Cred că fiecare copil merită să fie ascultat, iar fiecare părinte merită răspunsuri clare și sprijin.'],
            'about' => ['O relație bazată pe încredere, respect și siguranță pentru fiecare copil și familie.', 'Îmi doresc să ofer fiecărui copil îngrijire medicală atentă și individualizată, într-un mediu bazat pe încredere, respect și siguranță.'],
            'contact' => ['Pentru programări și informații, alege metoda de contact potrivită pentru tine.'],
        ]; ?>
        <?php foreach ($groups as $group => $title): ?>
          <h3><?php echo esc_html($title); ?></h3>
          <details style="margin:12px 0"><summary style="cursor:pointer;font-weight:600">Edit <?php echo esc_html($title); ?> text</summary><?php foreach ($editable[$group] as $source): $label = drtami_core_fields()[$group][$source] ?? $source; ?>
            <div style="padding:12px 16px;margin:10px 0;background:#fff;border:1px solid #ddd;border-radius:6px">
              <strong><?php echo esc_html($label); ?></strong>
              <?php foreach (['ro' => 'Romanian', 'en' => 'English', 'de' => 'German'] as $lang => $language): ?>
                <p><label><?php echo esc_html($language); ?><br>
                <textarea class="large-text" rows="2" name="drtami_core[texts][<?php echo esc_attr($lang); ?>][<?php echo esc_attr(md5($source)); ?>]" placeholder="<?php echo esc_attr($lang === 'ro' ? $source : 'Blank = keep current translation'); ?>"><?php echo esc_textarea($data['texts'][$lang][md5($source)] ?? ''); ?></textarea>
                </label></p>
              <?php endforeach; ?>
            </div>
          <?php endforeach; ?>
        </details><?php endforeach; ?>
        <h2 id="faq-editor">Frequently Asked Questions</h2>
        <p>Add up to 30 questions per language. Both question and answer are required. Empty rows are ignored.</p>
        <?php foreach (['ro' => 'Romanian', 'en' => 'English', 'de' => 'German'] as $lang => $language):
          $entries = $data['faq'][$lang] ?? [];
          $entries = array_slice(is_array($entries) ? $entries : [], 0, 30);
          $entries[] = ['question' => '', 'answer' => ''];
        ?>
          <details style="margin:12px 0"><summary style="cursor:pointer;font-weight:600"><?php echo esc_html($language); ?> FAQs</summary>
          <div class="dt-faq-list" data-lang="<?php echo esc_attr($lang); ?>">
          <?php foreach ($entries as $index => $entry): ?>
            <div class="dt-faq-row" style="background:#fff;padding:12px;margin:10px 0;border:1px solid #ddd">
              <label>Question <input class="large-text" name="drtami_core[faq][<?php echo esc_attr($lang); ?>][<?php echo esc_attr($index); ?>][question]" value="<?php echo esc_attr($entry['question'] ?? ''); ?>"></label>
              <label>Answer <textarea class="large-text" rows="3" name="drtami_core[faq][<?php echo esc_attr($lang); ?>][<?php echo esc_attr($index); ?>][answer]"><?php echo esc_textarea($entry['answer'] ?? ''); ?></textarea></label>
              <button type="button" class="button dt-faq-remove">Remove question</button>
            </div>
          <?php endforeach; ?></div>
          <button type="button" class="button dt-faq-add" data-lang="<?php echo esc_attr($lang); ?>">+ Add question</button>
          </details>
        <?php endforeach; ?>
        <?php submit_button('Save changes'); ?>
      </form>
      <p><a href="<?php echo esc_url(admin_url('admin.php?page=drtami-design')); ?>">Site Design</a> · <a href="<?php echo esc_url(admin_url('edit.php')); ?>">Manage articles</a> · <a href="<?php echo esc_url(admin_url('upload.php')); ?>">Media Library</a> · <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" rel="noopener noreferrer">View website</a></p>
    </div>
    <?php
}

/** A restricted editor account for nontechnical site owners. */
add_action('init', static function (): void {
    $admin = get_role('administrator');
    if ($admin && !$admin->has_cap('drtami_manage_site')) $admin->add_cap('drtami_manage_site');
    if (!get_role('drtami_site_owner')) {
        add_role('drtami_site_owner', 'Dr. Tami – Site Owner', [
            'read' => true, 'upload_files' => true,
            'edit_posts' => true, 'edit_published_posts' => true, 'publish_posts' => true,
            'delete_posts' => true, 'delete_published_posts' => true,
            'drtami_manage_site' => true,
        ]);
    }
});
add_action('admin_menu', static function (): void {
    if (!current_user_can('drtami_manage_site') || current_user_can('manage_options')) return;
    foreach (['edit-comments.php', 'tools.php', 'options-general.php', 'themes.php', 'plugins.php', 'users.php'] as $slug) remove_menu_page($slug);
}, 999);
add_filter('login_redirect', static function ($redirect, $requested, $user) {
    if ($user instanceof WP_User && in_array('drtami_site_owner', (array) $user->roles, true)) return admin_url('admin.php?page=drtami-core');
    return $redirect;
}, 10, 3);

/** Theme-wide visual settings. All user values are validated against safe choices. */
function drtami_core_design_defaults(): array {
    return [
        'primary' => '#287A78', 'secondary' => '#A8C9BC', 'accent' => '#F2AE72',
        'background' => '#FAF8F3', 'cards' => '#E8F3EF', 'ink' => '#273536',
        'sans' => 'DM Sans', 'serif' => 'DM Serif Display',
    ];
}
function drtami_core_design(): array {
    $stored = get_option('drtami_core_design', []);
    return array_merge(drtami_core_design_defaults(), is_array($stored) ? $stored : []);
}
add_action('admin_post_drtami_design_save', static function (): void {
    if (!current_user_can('drtami_manage_site')) wp_die('Permission denied.');
    check_admin_referer('drtami_design_save');
    $defaults = drtami_core_design_defaults();
    $raw = isset($_POST['design']) && is_array($_POST['design']) ? wp_unslash($_POST['design']) : [];
    $safe = [];
    foreach (['primary', 'secondary', 'accent', 'background', 'cards', 'ink'] as $key) {
        $safe[$key] = sanitize_hex_color($raw[$key] ?? '') ?: $defaults[$key];
    }
    $allowed_sans = ['DM Sans', 'Inter', 'Arial'];
    $allowed_serif = ['DM Serif Display', 'Georgia', 'Merriweather'];
    $safe['sans'] = in_array($raw['sans'] ?? '', $allowed_sans, true) ? $raw['sans'] : $defaults['sans'];
    $safe['serif'] = in_array($raw['serif'] ?? '', $allowed_serif, true) ? $raw['serif'] : $defaults['serif'];
    update_option('drtami_core_design', $safe, false);
    wp_safe_redirect(add_query_arg(['page' => 'drtami-design', 'saved' => 1], admin_url('admin.php')));
    exit;
});
function drtami_core_design_admin(): void {
    if (!current_user_can('drtami_manage_site')) return;
    $values = drtami_core_design();
    $labels = ['primary' => 'Primary', 'secondary' => 'Secondary', 'accent' => 'Accent / Buttons', 'background' => 'Background', 'cards' => 'Cards', 'ink' => 'Text'];
    ?>
    <div class="wrap" style="max-width:900px">
    <h1>Site Design</h1><p>Change global colors and typography without editing code. Use Reset to restore the original theme.</p>
    <?php if (isset($_GET['saved'])): ?><div class="notice notice-success"><p>Design saved.</p></div><?php endif; ?>
    <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" id="drtami-design-form">
      <input type="hidden" name="action" value="drtami_design_save"><?php wp_nonce_field('drtami_design_save'); ?>
      <h2>Colors</h2>
      <div style="display:grid;grid-template-columns:repeat(2,minmax(200px,1fr));gap:14px">
      <?php foreach ($labels as $key => $label): ?>
        <label style="background:#fff;padding:15px;border:1px solid #ddd;border-radius:8px">
          <strong><?php echo esc_html($label); ?></strong><br>
          <input type="color" data-default="<?php echo esc_attr(drtami_core_design_defaults()[$key]); ?>" name="design[<?php echo esc_attr($key); ?>]" value="<?php echo esc_attr($values[$key]); ?>">
          <span class="dt-color-code"><?php echo esc_html($values[$key]); ?></span>
        </label>
      <?php endforeach; ?>
      </div>
      <h2>Fonts</h2>
      <p><label>Body font <select name="design[sans]"><?php foreach (['DM Sans','Inter','Arial'] as $font): ?><option <?php selected($values['sans'], $font); ?>><?php echo esc_html($font); ?></option><?php endforeach; ?></select></label></p>
      <p><label>Heading font <select name="design[serif]"><?php foreach (['DM Serif Display','Georgia','Merriweather'] as $font): ?><option <?php selected($values['serif'], $font); ?>><?php echo esc_html($font); ?></option><?php endforeach; ?></select></label></p>
      <h2>Live preview</h2>
      <div id="dt-design-preview" style="padding:30px;border-radius:16px;border:1px solid #ddd">
        <h2 style="font-size:32px;margin:0 0 12px">Care with empathy.</h2>
        <p>Compassionate care for children and their families.</p>
        <span style="display:inline-block;padding:12px 18px;border-radius:25px" class="dt-design-button">Book a consultation</span>
      </div>
      <?php submit_button('Save design'); ?>
      <button type="button" class="button" id="dt-design-reset">Reset to original design</button>
    </form></div>
    <?php
}
