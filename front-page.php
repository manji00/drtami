<?php get_header(); ?>
<main id="content">
<section class="hero">
 <div class="container hero-grid">
  <div class="hero-copy">
   <div class="eyebrow"><span class="dot"></span> <?php echo esc_html(drtami_t("Medic specialist · București")); ?></div>
   <h1><?php echo esc_html(drtami_t("Grijă pentru cei mici.")); ?><br><em><?php echo esc_html(drtami_t("Liniște pentru părinți.")); ?></em></h1>
   <p><?php echo esc_html(drtami_t("Oncologie și Hematologie Pediatrică — consultații cu atenție, empatie și o abordare individualizată, pentru fiecare copil și familie.")); ?></p>
   <div class="hero-actions"><a class="button button-primary" href="<?php echo esc_url(drtami_translate_page_url('contact')); ?>"><?php echo esc_html(drtami_t("Programează o consultație")); ?> <span>↗</span></a><a class="button button-outline" href="<?php echo esc_url(drtami_translate_page_url('despre-mine')); ?>"><?php echo esc_html(drtami_t("Află mai multe")); ?></a></div>
   <div class="hero-trust"><span>♡ <?php echo esc_html(drtami_t("Îngrijire personalizată")); ?></span><span>✳ <?php echo esc_html(drtami_t("Sprijin pentru familie")); ?></span></div>
  </div>
  <div class="hero-art image-placeholder">
   <img src="<?php echo esc_url(drtami_image('hero')); ?>" alt="Portrait of Dr. Tamara Cheșcheș" loading="eager">
   
  </div>
 </div>
</section>
<section class="intro-band"><div class="container band-grid"><span><?php echo esc_html(drtami_t("Un loc pentru întrebări, răspunsuri și încredere.")); ?></span><span><?php echo esc_html(drtami_t("Medicină bazată pe cunoaștere și empatie")); ?> <span aria-hidden="true">✳</span></span></div></section>
<section class="section container">
 <div class="section-heading"><div><span class="kicker"><?php echo esc_html(drtami_t("CUM TE POT AJUTA")); ?></span><h2><?php echo esc_html(drtami_t("Îngrijire adaptată")); ?> <em><?php echo esc_html(drtami_t("fiecărui copil")); ?></em></h2></div><p><?php echo esc_html(drtami_t("Evaluare, diagnostic, monitorizare și îndrumare medicală pentru copii și adolescenți.")); ?></p></div>
 <div class="service-grid">
  <article class="service-card"><div class="service-icon">♡</div><span class="card-number">01 /</span><h3><?php echo esc_html(drtami_t("Hematologie pediatrică")); ?></h3><p><?php echo esc_html(drtami_t("Evaluarea anemiilor, modificărilor hemoleucogramei, tulburărilor de coagulare și a altor afecțiuni hematologice.")); ?></p><a href="<?php echo esc_url(drtami_translate_page_url('despre-mine')); ?>#consultatii"><?php echo esc_html(drtami_t("Descoperă serviciile")); ?> <span>↗</span></a></article>
  <article class="service-card service-card-peach"><div class="service-icon">✳</div><span class="card-number">02 /</span><h3><?php echo esc_html(drtami_t("Oncologie pediatrică")); ?></h3><p><?php echo esc_html(drtami_t("Evaluarea simptomelor și a suspiciunilor oncologice, monitorizare și îndrumare după tratament.")); ?></p><a href="<?php echo esc_url(drtami_translate_page_url('despre-mine')); ?>#consultatii"><?php echo esc_html(drtami_t("Descoperă serviciile")); ?> <span>↗</span></a></article>
  <article class="service-card"><div class="service-icon">☼</div><span class="card-number">03 /</span><h3><?php echo esc_html(drtami_t("Sprijin pentru familie")); ?></h3><p><?php echo esc_html(drtami_t("Interpretarea analizelor, a doua opinie medicală și explicații clare pentru părinți.")); ?></p><a href="<?php echo esc_url(drtami_translate_page_url('despre-mine')); ?>#consultatii"><?php echo esc_html(drtami_t("Descoperă serviciile")); ?> <span>↗</span></a></article>
 </div>
</section>
<section class="about-preview"><div class="container about-grid"><div class="about-decoration image-placeholder"><img src="<?php echo esc_url(drtami_image('about_preview')); ?>" alt="Dr. Tamara Cheșcheș in her medical office" loading="lazy"></div><div class="about-copy"><span class="kicker"><?php echo esc_html(drtami_t("SĂ FACEM CUNOȘTINȚĂ")); ?></span><h2><?php echo esc_html(drtami_t("Bună, sunt")); ?> <em>Dr. Tamara Cheșcheș.</em></h2><p><?php echo esc_html(drtami_t("Sunt medic specialist în Oncologie și Hematologie Pediatrică. Cred că fiecare copil merită să fie ascultat, iar fiecare părinte merită răspunsuri clare și sprijin.")); ?></p><p><?php echo esc_html(drtami_t("Îmi doresc să ofer îngrijire atentă și individualizată, într-un mediu bazat pe încredere, respect și siguranță.")); ?></p><a class="text-link" href="<?php echo esc_url(drtami_translate_page_url('despre-mine')); ?>"><?php echo esc_html(drtami_t("Citește povestea mea")); ?> <span>↗</span></a></div></div></section>
<section class="section container"><div class="section-heading"><div><span class="kicker"><?php echo esc_html(drtami_t("RESURSE UTILE")); ?></span><h2><?php echo esc_html(drtami_t("Informații care aduc")); ?> <em><?php echo esc_html(drtami_t("claritate")); ?></em></h2></div><a class="text-link" href="<?php echo esc_url(drtami_translate_page_url('articole')); ?>"><?php echo esc_html(drtami_t("Toate articolele")); ?> ↗</a></div><?php
$featured = new WP_Query(['post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1, 'ignore_sticky_posts' => false]);
if ($featured->have_posts()): while ($featured->have_posts()): $featured->the_post();
?>
<a class="article-feature" href="<?php the_permalink(); ?>"><span class="article-visual image-placeholder"><img src="<?php echo esc_url(has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : get_theme_file_uri('/assets/images/placeholder.webp')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy"></span><span class="article-feature-copy"><span class="kicker"><?php echo esc_html(drtami_t('Articole')); ?></span><strong><?php the_title(); ?></strong><span><?php echo esc_html(wp_trim_words(get_the_excerpt() ?: wp_strip_all_tags(get_the_content()), 24)); ?></span><b><?php echo esc_html(drtami_t('Citește articolul')); ?> ↗</b></span></a>
<?php endwhile; wp_reset_postdata(); endif; ?>
</section>
<section class="cta-section"><div class="container cta-inner"><div><span class="kicker"><?php echo esc_html(drtami_t("SUNT AICI PENTRU VOI")); ?></span><h2><?php echo esc_html(drtami_t("Hai să vorbim despre")); ?> <em><?php echo esc_html(drtami_t("sănătatea copilului tău.")); ?></em></h2><p><?php echo esc_html(drtami_t("Pentru întrebări sau programări, mă poți contacta telefonic, prin WhatsApp sau prin formular.")); ?></p></div><a class="button button-light" href="<?php echo esc_url(drtami_translate_page_url('contact')); ?>"><?php echo esc_html(drtami_t("Contactează-mă")); ?> ↗</a></div></section>
</main>
<?php get_footer(); ?>
