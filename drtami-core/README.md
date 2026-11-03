# Dr. Tami – Website Manager

The WordPress admin screen is in **English**, independently of the public site's language.

## Updating an existing installation

After merging and pulling the theme repository, copy the plugin folder again:

```powershell
cd C:\DevZone\drtami\www\wp-content\themes\drtami
Copy-Item -Recurse -Force .\drtami-core\* ..\..\plugins\drtami-core\
```

If not yet installed, create the plugin directory first:

```powershell
New-Item -ItemType Directory -Force ..\..\plugins\drtami-core
Copy-Item -Recurse -Force .\drtami-core\* ..\..\plugins\drtami-core\
```

Activate **Dr. Tami – Website Manager** in Plugins if it is not already active. Go to **My Website**.

## Owner account

An administrator can create a WordPress user under **Users → Add New**, assign role **Dr. Tami – Site Owner**, and provide that user with their own login. Do not share an administrator account.

The restricted role can edit the site settings on **My Website**, upload images and manage posts. It cannot install plugins, switch themes or change WordPress settings. The site owner is redirected to **My Website** after login. Administrators retain full access.

## Editable areas

- Contact information, clinic address, consultation fee and duration
- Image slots on the homepage, About page and article listing
- Page copy (Romanian, English, German), including medical service descriptions
- FAQs: up to 30 question/answer pairs per language
- Articles through the normal WordPress Posts editor

Blank text overrides fall back to the built-in translated copy. FAQ entries are shown only when both question and answer are supplied. Saving publishes changes immediately; there is not yet a preview/draft workflow.

## Before going live

Test saving content in each language, FAQ add/remove, media selection, contact form delivery and user permissions locally. Review medical content and translations with the doctor. **This change has not been tested in a running WordPress instance.**
