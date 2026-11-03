<?php get_header(); ?>
<main id="content"><section class="page-hero"><div class="container"><span class="kicker"><?php echo esc_html(drtami_t('Articole')); ?></span><h1><?php echo esc_html(drtami_t('Informații pentru părinți.')); ?></h1><p><?php echo esc_html(drtami_t('Articole medicale explicate clar, pentru decizii informate și mai multă liniște.')); ?></p></div></section>
<section class="section container"><div class="articles-grid">
<?php $articles = new WP_Query(['post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 12]); ?>
<?php if ($articles->have_posts()): while ($articles->have_posts()): $articles->the_post(); ?>
<a class="article-list-card" href="<?php the_permalink(); ?>"><span class="article-list-art image-placeholder" title="Article cover: A reassuring pediatric medical consultation or a neutral illustration of blood cells, suitable for an educational article for parents." aria-label="Article cover image placeholder"><img src="<?php echo esc_url(get_theme_file_uri('/assets/images/placeholder.webp')); ?>" alt="Temporary article cover placeholder" loading="lazy"><span class="image-placeholder-label">ARTICLE COVER · Medical editorial image</span></span><span class="kicker">HEMATOLOGIE PEDIATRICĂ</span><h2><?php the_title(); ?></h2><span class="text-link"><?php echo esc_html(drtami_t('Citește articolul')); ?> ↗</span></a>
<?php endwhile; wp_reset_postdata(); else: ?><p>Articolele vor apărea în curând.</p><?php endif; ?>
</div></section></main><?php get_footer(); ?>
