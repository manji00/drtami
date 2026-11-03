<?php get_header(); ?>
<main id="content">
<?php while (have_posts()): the_post(); ?>
<section class="page-hero"><div class="container"><a class="back-link" href="<?php echo esc_url(drtami_translate_page_url('articole')); ?>">← <?php echo esc_html(drtami_t('Înapoi la articole')); ?></a><span class="kicker"><?php echo esc_html(drtami_t('ARTICOL · HEMATOLOGIE PEDIATRICĂ')); ?></span><h1><?php the_title(); ?></h1></div></section>
<div class="container article-body prose">
<?php if (get_post_field('post_name', get_the_ID()) === 'cand-este-recomandat-un-consult-la-hematologul-pediatru' && trim((string) get_the_content()) === ''): ?>
<p>Uneori, anumite semne și simptome aparent obișnuite pot ascunde modificări ale sângelui sau ale sistemului hematologic. Un consult de specialitate poate ajuta la identificarea cauzei și la stabilirea conduitei medicale potrivite.</p>
<p>Este recomandat să solicitați o evaluare hematologică pediatrică dacă observați la copilul dumneavoastră:</p>
<ul>
<li>Paloare persistentă a pielii sau a mucoaselor, care poate fi asociată cu anemia.</li>
<li>Oboseală accentuată, lipsă de energie sau toleranță redusă la efort, mai ales atunci când nu există o explicație evidentă.</li>
<li>Vânătăi care apar cu ușurință sau fără traumatisme evidente.</li>
<li>Sângerări nazale frecvente sau prelungite, sângerări gingivale ori alte manifestări hemoragice neobișnuite.</li>
<li>Puncte roșii-violacee pe piele (peteșii), care nu dispar la apăsare.</li>
<li>Infecții frecvente sau prelungite, în special dacă sunt asociate cu alte simptome.</li>
<li>Ganglioni limfatici măriți și persistenți, mai ales dacă sunt însoțiți de alte manifestări.</li>
<li>Febră prelungită sau recurentă, scădere inexplicabilă în greutate ori transpirații nocturne abundente.</li>
<li>Modificări ale analizelor de sânge, precum hemoglobină scăzută, număr modificat de leucocite sau trombocite.</li>
</ul>
<p>De asemenea, consultul hematologic este recomandat atunci când medicul pediatru identifică modificări ale hemoleucogramei care necesită investigații suplimentare.</p>
<p>Un lucru important de reținut: prezența unuia sau mai multor simptome nu înseamnă automat existența unei boli hematologice sau oncologice. Multe dintre aceste manifestări au cauze benigne. Evaluarea medicală are rolul de a clarifica situația și de a oferi liniște și siguranță familiei.</p>
<p>Nu așteptați ca simptomele să se agraveze pentru a solicita un consult medical. Uneori, un simplu consult și interpretarea corectă a analizelor pot face diferența.</p>
<?php else: the_content(); endif; ?>
<div class="article-end"><p><?php echo esc_html(drtami_t('Ai întrebări sau dorești o consultație?')); ?></p><a class="button button-primary" href="<?php echo esc_url(drtami_translate_page_url('contact')); ?>"><?php echo esc_html(drtami_t('Contactează-mă')); ?> ↗</a></div>
</div>
<?php endwhile; ?></main><?php get_footer(); ?>
