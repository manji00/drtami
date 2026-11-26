<?php
get_header();
$page_id = get_queried_object_id();
$status = isset($_GET['review_status']) && is_string($_GET['review_status'])
    ? sanitize_key(wp_unslash($_GET['review_status']))
    : '';
$feedback = [
    'received' => 'Mulțumim! Recenzia va apărea după aprobare.',
    'invalid' => 'Verifică datele introduse și încearcă din nou.',
    'wait' => 'Așteaptă un minut înainte de a trimite o altă recenzie.',
    'error' => 'Recenzia nu a putut fi trimisă. Încearcă din nou.',
];
$paged = isset($_GET['review_page_number']) && is_string($_GET['review_page_number'])
    ? max(1, absint($_GET['review_page_number']))
    : 1;
$reviews = new WP_Query([
    'post_type' => 'drtami_review',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'paged' => $paged,
]);
?>
<main id="content">
  <section class="page-hero">
    <div class="container"><h1><?php echo esc_html(drtami_t('Recenzii')); ?></h1></div>
  </section>
  <section class="section container contact-grid reviews-grid">
    <div class="form-card">
      <h2><?php echo esc_html(drtami_t('Lasă o recenzie')); ?></h2>
      <p><?php echo esc_html(drtami_t('Nu include nume sau date medicale în recenzie.')); ?></p>
      <?php if (isset($feedback[$status])): ?>
        <div class="form-notice<?php echo $status === 'received' ? ' success' : ''; ?>" role="status">
          <?php echo esc_html(drtami_t($feedback[$status])); ?>
        </div>
      <?php endif; ?>
      <form class="review-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
        <input type="hidden" name="action" value="drtami_review">
        <input type="hidden" name="review_page" value="<?php echo esc_attr($page_id); ?>">
        <?php wp_nonce_field('drtami_review_' . $page_id, 'drtami_nonce', false); ?>
        <div class="honeypot" aria-hidden="true"><label>Website <input name="website" tabindex="-1" autocomplete="off"></label></div>
        <fieldset class="review-stars">
          <legend><?php echo esc_html(drtami_t('Evaluare (1–5 stele)')); ?></legend>
          <div class="review-star-options">
            <?php for ($rating = 1; $rating <= 5; $rating++): ?>
              <label>
                <input type="radio" name="rating" value="<?php echo esc_attr($rating); ?>" aria-label="<?php echo esc_attr($rating . ' / 5'); ?>" required>
                <?php get_template_part('template-parts/icon-review-star'); ?>
              </label>
            <?php endfor; ?>
          </div>
        </fieldset>
        <label for="review-message"><?php echo esc_html(drtami_t('Comentariu (opțional)')); ?></label>
        <textarea id="review-message" name="message" rows="5" maxlength="1500"></textarea>
        <button class="button button-primary" type="submit"><?php echo esc_html(drtami_t('Trimite recenzia')); ?></button>
      </form>
    </div>
    <div class="contact-details">
      <h2><?php echo esc_html(drtami_t('Recenzii publicate')); ?></h2>
      <?php if ($reviews->have_posts()): ?>
        <div class="review-list">
          <?php foreach ($reviews->posts as $review):
              $rating = (int) get_post_meta($review->ID, '_drtami_rating', true);
          ?>
            <article class="review-card">
              <?php if ($rating >= 1 && $rating <= 5): ?>
                <div class="review-rating" role="img" aria-label="<?php echo esc_attr($rating . ' / 5'); ?>">
                  <?php for ($star = 1; $star <= 5; $star++): ?>
                    <span<?php echo $star <= $rating ? ' class="is-filled"' : ''; ?>>
                      <?php get_template_part('template-parts/icon-review-star'); ?>
                    </span>
                  <?php endfor; ?>
                </div>
              <?php endif; ?>
              <?php if ($review->post_content !== ''): ?>
                <p><?php echo nl2br(esc_html($review->post_content)); ?></p>
              <?php endif; ?>
            </article>
          <?php endforeach; ?>
        </div>
        <?php echo wp_kses_post(paginate_links([
            'current' => $paged,
            'total' => $reviews->max_num_pages,
            'base' => str_replace('999999999', '%#%', add_query_arg('review_page_number', '999999999', get_permalink($page_id))),
            'format' => '',
        ]) ?: ''); ?>
      <?php else: ?>
        <p><?php echo esc_html(drtami_t('Momentan nu există recenzii publicate.')); ?></p>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
