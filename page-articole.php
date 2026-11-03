<?php get_header(); ?>
<main id="content"><section class="page-hero"><div class="container"><span class="kicker">ARTICOLE</span><h1>Informații pentru <em>părinți.</em></h1><p>Articole medicale explicate clar, pentru decizii informate și mai multă liniște.</p></div></section>
<section class="section container"><div class="articles-grid">
<?php $articles = new WP_Query(['post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 12]); ?>
<?php if ($articles->have_posts()): while ($articles->have_posts()): $articles->the_post(); ?>
<a class="article-list-card" href="<?php the_permalink(); ?>"><span class="article-list-art">✳</span><span class="kicker">HEMATOLOGIE PEDIATRICĂ</span><h2><?php the_title(); ?></h2><span class="text-link">Citește articolul ↗</span></a>
<?php endwhile; wp_reset_postdata(); else: ?><p>Articolele vor apărea în curând.</p><?php endif; ?>
</div></section></main><?php get_footer(); ?>
