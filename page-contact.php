<?php get_header(); ?>
<main id="content">
<section class="page-hero"><div class="container"><span class="kicker"><?php echo esc_html(drtami_t("CONTACT & PROGRAMĂRI")); ?></span><h1><?php echo esc_html(drtami_t("Hai să ")); ?><em><?php echo esc_html(drtami_t("vorbim.")); ?></em></h1><p><?php echo esc_html(drtami_t("Pentru programări și informații, alege metoda de contact potrivită pentru tine.")); ?></p></div></section>
<section class="section container contact-grid">
 <div class="contact-details">
  <span class="kicker"><?php echo esc_html(drtami_t("DATE DE CONTACT")); ?></span><h2><?php echo esc_html(drtami_t("Sunt aici pentru ")); ?><em><?php echo esc_html(drtami_t("voi.")); ?></em></h2>
  <div class="contact-item"><span>☎</span><div><strong>Telefon / WhatsApp</strong><a href="tel:+40750436379">+40 750 436 379</a><a href="https://wa.me/40750436379" target="_blank" rel="noopener noreferrer"><?php echo esc_html(drtami_t("Scrie pe WhatsApp")); ?> ↗</a></div></div>
  <div class="contact-item"><span>✉</span><div><strong>E-mail</strong><a href="mailto:cheschestamara@gmail.com">cheschestamara@gmail.com</a></div></div>
  <div class="contact-item"><span>⌖</span><div><strong><?php echo esc_html(drtami_t("Adresa clinicii")); ?></strong><p>Aleea Florin Ciungan nr. 17, <?php echo esc_html(drtami_t("București (zona Dristor)")); ?></p></div></div>
  <div class="appointment-info"><h3><?php echo esc_html(drtami_t("Informații utile pentru consultație")); ?></h3><p><strong><?php echo esc_html(drtami_t("Tarif:")); ?></strong> 400 RON (<?php echo esc_html(drtami_t("fără decontare CASMB")); ?>)</p><p><strong><?php echo esc_html(drtami_t("Durată:")); ?></strong> 45–60 minute</p><p><strong><?php echo esc_html(drtami_t("De adus:")); ?></strong> <?php echo esc_html(drtami_t("copilul (prezență obligatorie) și documentele medicale ale acestuia.")); ?></p></div>
 </div>
 <div class="form-card"><h2><?php echo esc_html(drtami_t("Trimite un mesaj")); ?></h2><p><?php echo esc_html(drtami_t("Completează formularul, iar mesajul va fi transmis pe e-mail.")); ?></p>
 <?php $status = isset($_GET['status']) ? sanitize_key(wp_unslash($_GET['status'])) : ''; ?>
 <?php if ($status === 'sent'): ?><div class="form-notice success" role="status"><?php echo esc_html(drtami_t("Mesajul a fost trimis. Mulțumesc!")); ?></div>
 <?php elseif ($status === 'invalid'): ?><div class="form-notice" role="alert"><?php echo esc_html(drtami_t("Verifică datele introduse și încearcă din nou.")); ?></div>
 <?php elseif ($status === 'wait'): ?><div class="form-notice" role="alert"><?php echo esc_html(drtami_t("Te rugăm să aștepți un minut înainte de a trimite un alt mesaj.")); ?></div>
 <?php elseif ($status === 'error'): ?><div class="form-notice" role="alert"><?php echo esc_html(drtami_t("Mesajul nu a putut fi trimis. Te rugăm să folosești telefonul sau e-mailul.")); ?></div><?php endif; ?>
 <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
  <input type="hidden" name="action" value="drtami_contact">
  <?php wp_nonce_field('drtami_contact', 'drtami_nonce'); ?>
  <div class="honeypot" aria-hidden="true"><label>Website <input name="website" type="text" tabindex="-1" autocomplete="off"></label></div>
  <label for="contact-name"><?php echo esc_html(drtami_t("Numele tău ")); ?><span>*</span></label><input id="contact-name" name="name" required maxlength="120" autocomplete="name" placeholder="<?php echo esc_attr(drtami_t("Nume și prenume")); ?>">
  <label for="contact-email"><?php echo esc_html(drtami_t("Adresa de e-mail ")); ?><span>*</span></label><input id="contact-email" name="email" type="email" required maxlength="254" autocomplete="email" placeholder="nume@exemplu.ro">
  <label for="contact-message"><?php echo esc_html(drtami_t("Mesajul tău ")); ?><span>*</span></label><textarea id="contact-message" name="message" rows="6" maxlength="3000" required placeholder="<?php echo esc_attr(drtami_t("Cum te pot ajuta?")); ?>"></textarea>
  <label class="checkbox-label"><input type="checkbox" name="consent" value="1" required><span><?php echo esc_html(drtami_t("Sunt de acord ca datele introduse să fie folosite pentru a primi un răspuns la solicitarea mea. ")); ?><strong><?php echo esc_html(drtami_t("Nu trimite date medicale sensibile prin acest formular.")); ?></strong></span></label>
  <button class="button button-primary" type="submit"><?php echo esc_html(drtami_t("Trimite mesajul")); ?> ↗</button>
 </form>
 </div>
</section></main><?php get_footer(); ?>
