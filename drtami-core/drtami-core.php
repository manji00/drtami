<?php
/**
 * Plugin Name: Dr. Tami – Website Manager
 * Description: Easily manage site content, contact details, FAQs and images without code.
 * Version: 1.1.0
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
});
add_action('admin_enqueue_scripts', static function (string $hook): void {
    if ($hook !== 'toplevel_page_drtami-core') return;
    wp_enqueue_media();
    wp_enqueue_script('drtami-core-admin', plugin_dir_url(__FILE__) . 'admin.js', ['jquery'], '1.0.0', true);
});
add_action('admin_post_drtami_core_save', static function (): void {
    if (!current_user_can('drtami_manage_site')) wp_die('Permission denied.');
    check_admin_referer('drtami_core_save');
    $raw = isset($_POST['drtami_core']) && is_array($_POST['drtami_core']) ? wp_unslash($_POST['drtami_core']) : [];
    $clean = ['texts' => [], 'details' => [], 'images' => [], 'faq' => []];
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
    $images = ['hero' => 'Homepage – Main image', 'about_preview' => 'Homepage – Portrait', 'about_portrait' => 'About me – Portrait', 'article_home' => 'Homepage – Featured article', 'article_list' => 'Articles – Listing image'];
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
        <h2>Page content</h2><p>Edit content in Romanian, English and German independently. Only fill in the text you want to change.</p>
        <?php foreach ($groups as $group => $title): ?>
          <h3><?php echo esc_html($title); ?></h3>
          <details style="margin:12px 0"><summary style="cursor:pointer;font-weight:600">Edit <?php echo esc_html($title); ?> text</summary><?php foreach (drtami_core_fields()[$group] as $source => $label): ?>
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
        <h2>Frequently Asked Questions</h2>
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
      <p><a href="<?php echo esc_url(admin_url('edit.php')); ?>">Manage articles</a> · <a href="<?php echo esc_url(admin_url('upload.php')); ?>">Media Library</a> · <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" rel="noopener noreferrer">View website</a></p>
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
