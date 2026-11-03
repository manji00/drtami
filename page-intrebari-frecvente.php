<?php get_header(); ?>
<main id="content">
<section class="page-hero"><div class="container"><h1><?php echo esc_html(drtami_t('Întrebări frecvente')); ?></h1></div></section>
<section class="section container">
<?php
$language = drtami_language();
$data = function_exists('drtami_core_option') ? drtami_core_option() : [];
$questions = $data['faq'][$language] ?? [];
if (is_array($questions) && $questions):
?>
<div class="faq-list">
<?php foreach ($questions as $entry):
    if (!is_array($entry) || empty($entry['question']) || empty($entry['answer'])) continue;
?>
<details class="faq-item" style="padding:18px 20px;margin:12px 0;border:1px solid #dce8e2;border-radius:12px">
<summary style="cursor:pointer;font-weight:600"><?php echo esc_html($entry['question']); ?></summary>
<p><?php echo nl2br(esc_html($entry['answer'])); ?></p>
</details>
<?php endforeach; ?>
</div>
<?php else: ?>
<p><?php echo esc_html(drtami_t('Aici vor apărea în curând răspunsuri la întrebările frecvente.')); ?></p>
<?php endif; ?>
<a href="<?php echo esc_url(drtami_translate_page_url('contact')); ?>"><?php echo esc_html(drtami_t('Contact')); ?></a>
</section></main>
<?php get_footer(); ?>
