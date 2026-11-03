# Dr. Tami – Website Manager

The owner dashboard is in English. This plugin complements the custom WordPress theme; it does not replace the WordPress post editor.

## Install / update

Merge the pull request and pull the theme repository, then copy the plugin files to the **active** plugin directory:

```powershell
cd C:\DevZone\drtami\www\wp-content\themes\drtami
git pull origin main
New-Item -ItemType Directory -Force ..\..\plugins\drtami-core
Copy-Item -Recurse -Force .\drtami-core\* ..\..\plugins\drtami-core\
```

Activate **Dr. Tami – Website Manager** in WordPress → Plugins if needed.

## Where to edit

- **My Website**: contact details, consultation fee, duration, homepage/About images, a small set of static text overrides and multilingual FAQs (including ordering).
- **My Website → Site Design**: theme palette and fonts, live preview and reset to original design. Click **Save design** to publish.
- **Posts → Add New**: create/edit medical articles using the standard Gutenberg editor. Set a **Featured image** for each article. The newest published article is featured on the homepage automatically, and the article list uses each post's featured image.
- **Polylang**: associate translations of each article. Only publish translated content when reviewed.

The theme's static pages are intentionally rendered from PHP templates. Their empty Gutenberg body is not an error; use **My Website** for their editable content. The restricted **Dr. Tami – Site Owner** account has no page editor access, avoiding this confusion. Create this account from an administrator login under **Users → Add New**.

Previously saved content and FAQ entries are preserved; the former article image slots are no longer displayed or used. Text overrides for static sections no longer shown in the simplified editor remain stored and continue to render.

## Release checklist

Test in local WordPress before production: update plugin files, change a color and reset it, save contact details, reorder FAQ entries in each language, create a post with a featured image, verify article listing and homepage feature, verify Polylang behavior and the restricted owner account. Medical content must be approved by the doctor. Changes currently publish immediately; draft/preview workflows for static settings remain future work.
