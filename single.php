<?php get_header(); ?>
<main id="content">
<?php while (have_posts()): the_post(); ?>
<section class="page-hero"><div class="container"><a class="back-link" href="<?php echo esc_url(drtami_translate_page_url('articole')); ?>">← <?php echo esc_html(drtami_t('Înapoi la articole')); ?></a><span class="kicker"><?php echo esc_html(drtami_t('ARTICOL · HEMATOLOGIE PEDIATRICĂ')); ?></span><h1><?php the_title(); ?></h1></div></section>
<div class="container article-body prose">
<?php the_content(); ?>
<div class="article-end"><p><?php echo esc_html(drtami_t('Ai întrebări sau dorești o consultație?')); ?></p><a class="button button-primary" href="<?php echo esc_url(drtami_translate_page_url('contact')); ?>"><?php echo esc_html(drtami_t('Contactează-mă')); ?> ↗</a></div>
</div>
<?php endwhile; ?></main><?php get_footer(); ?>
