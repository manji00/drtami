<?php get_header(); ?>
<main id="content"><section class="page-hero"><div class="container"><span class="kicker"><?php echo esc_html(drtami_t('Articole')); ?></span><h1><?php echo esc_html(drtami_t('Informații pentru părinți.')); ?></h1><p><?php echo esc_html(drtami_t('Articole medicale explicate clar, pentru decizii informate și mai multă liniște.')); ?></p></div></section>
<section class="section container"><div class="articles-grid">
<?php $articles = new WP_Query(['post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 12]); ?>
<?php if ($articles->have_posts()): while ($articles->have_posts()): $articles->the_post(); ?>
<a class="article-list-card" href="<?php the_permalink(); ?>"><span class="article-list-art image-placeholder"><img src="<?php echo esc_url((has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : get_theme_file_uri('/assets/images/placeholder.webp'))); ?>" alt="Article cover image" loading="lazy"></span><span class="kicker"><?php echo esc_html(drtami_t('HEMATOLOGIE PEDIATRICĂ')); ?></span><h2><?php the_title(); ?></h2><span class="text-link"><?php echo esc_html(drtami_t('Citește articolul')); ?> ↗</span></a>
<?php endwhile; wp_reset_postdata(); else: ?><p><?php echo esc_html(drtami_t('Articolele vor apărea în curând.')); ?></p><?php endif; ?>
</div></section></main><?php get_footer(); ?>
