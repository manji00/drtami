<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#content"><?php echo esc_html(drtami_t("Sari la conținut")); ?></a>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="<?php echo esc_url(drtami_home_url()); ?>" aria-label="Dr. Tamara Cheșcheș – Acasă">
      <span class="brand-mark" aria-hidden="true">✳</span>
      <span><strong>Dr. Tamara Cheșcheș</strong><small>Oncologie &amp; Hematologie Pediatrică</small></span>
    </a>
    <button class="menu-toggle" type="button" aria-controls="primary-nav" aria-expanded="false" aria-label="<?php echo esc_attr(drtami_t('Deschide meniul')); ?>">☰</button>
    <nav id="primary-nav" class="primary-nav" aria-label="Navigare principală">
      <a href="<?php echo esc_url(drtami_home_url()); ?>"><?php echo esc_html(drtami_t("Acasă")); ?></a>
      <a href="<?php echo esc_url(drtami_translate_page_url('despre-mine')); ?>"><?php echo esc_html(drtami_t("Despre mine")); ?></a>
      <a href="<?php echo esc_url(drtami_translate_page_url('articole')); ?>"><?php echo esc_html(drtami_t("Articole")); ?></a>
      <a href="<?php echo esc_url(drtami_translate_page_url('intrebari-frecvente')); ?>"><?php echo esc_html(drtami_t("Întrebări frecvente")); ?></a>
      <a class="nav-contact" href="<?php echo esc_url(drtami_translate_page_url('contact')); ?>"><?php echo esc_html(drtami_t("Contact")); ?> <span aria-hidden="true">↗</span></a>
      <?php if (function_exists('pll_the_languages')): ?>
      <div class="language-switcher" aria-label="Language">
      <?php $langs = pll_the_languages(['raw' => 1, 'hide_if_empty' => 0]); if (is_array($langs)): foreach ($langs as $lang): if (!drtami_language_is_public((string) $lang['slug'])) continue; ?>
        <a href="<?php echo esc_url($lang['url']); ?>" lang="<?php echo esc_attr($lang['slug']); ?>" hreflang="<?php echo esc_attr($lang['slug']); ?>" <?php echo !empty($lang['current_lang']) ? 'aria-current="page"' : ''; ?>><?php echo esc_html(strtoupper($lang['slug'])); ?></a>
      <?php endforeach; endif; ?>
      </div>
    <?php endif; ?>
    </nav>
  </div>
</header>
