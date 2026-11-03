<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#content">Sari la conținut</a>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Dr. Tamara Cheșcheș – Acasă">
      <span class="brand-mark" aria-hidden="true">✳</span>
      <span><strong>Dr. Tamara Cheșcheș</strong><small>Oncologie &amp; Hematologie Pediatrică</small></span>
    </a>
    <button class="menu-toggle" type="button" aria-controls="primary-nav" aria-expanded="false" aria-label="Deschide meniul">☰</button>
    <nav id="primary-nav" class="primary-nav" aria-label="Navigare principală">
      <a href="<?php echo esc_url(home_url('/')); ?>">Acasă</a>
      <a href="<?php echo esc_url(drtami_page_url('despre-mine')); ?>">Despre mine</a>
      <a href="<?php echo esc_url(drtami_page_url('articole')); ?>">Articole</a>
      <a href="<?php echo esc_url(drtami_page_url('intrebari-frecvente')); ?>">Întrebări frecvente</a>
      <a class="nav-contact" href="<?php echo esc_url(drtami_page_url('contact')); ?>">Contact <span aria-hidden="true">↗</span></a>
    </nav>
  </div>
</header>
