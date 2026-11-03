# Multilingual setup (Polylang)

The theme is prepared for Romanian (RO), English (EN), and German (DE). Romanian is the primary language. **The plugin is not bundled in Git and must be installed in WordPress.**

1. WordPress → Plugins → Add New → search **Polylang** → Install → Activate.
2. In Languages, add Romanian (`ro`), English (`en`), German (`de`). Set Romanian as the default. Assign Romanian to the existing pages and the original medical article.
3. For each original page (**Despre mine**, **Contact**, **Întrebări frecvente**, **Articole**), create and link its EN and DE translations using Polylang's language columns. Translate the content in WordPress. The original Romanian page layouts are file-based; translated pages currently use `page.php` to show their WordPress content. The translated **Articole** pages use the article listing template.
4. Create and link translated versions of each article using Polylang. WordPress handles the content; the theme does not machine-translate medical text.
5. Open the site and check the RO / EN / DE links in the header. Languages with missing translations may not show a page-specific link.
6. Settings → Permalinks → Save Changes if URLs return 404.

The homepage's main interface is translated using `inc/i18n.php`. Other static medical text (such as Romanian About and Contact pages) must be translated and reviewed before publication. For translated contact pages, add an appropriate form or translated shortcode/block: the Romanian form is **not** automatically copied into the translated page.

No automatic translation of medical advice is performed. Have a qualified reviewer verify medical terminology and translated content. Configure SMTP for `wp_mail()` before using the contact form in production.
