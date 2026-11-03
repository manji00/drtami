<?php get_header(); ?>
<main id="content"><section class="page-hero"><div class="container"><h1><?php the_title(); ?></h1></div></section><div class="container article-body prose"><?php while (have_posts()): the_post(); the_content(); endwhile; ?></div></main>
<?php get_footer(); ?>
