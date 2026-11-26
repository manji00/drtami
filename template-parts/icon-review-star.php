<?php $shape_id = wp_unique_id('review-star-shape-'); ?>
<svg class="review-star-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
  <path id="<?php echo esc_attr($shape_id); ?>" d="M10.9 2.7Q12 .95 13.1 2.7L15.6 8.4l5.9.6q1.65.2.5 1.6l-4.5 4 1.3 5.7q.4 1.75-1.25 1.15L12 18.1l-5.55 3.35q-1.65.6-1.25-1.15l1.3-5.7-4.5-4q-1.15-1.4.5-1.6l5.9-.6z"/>
  <use class="review-star-inner-outline" href="#<?php echo esc_attr($shape_id); ?>"/>
</svg>
