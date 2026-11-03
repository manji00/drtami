# Dr. Tami – WordPress Theme

Dieses Repository enthält ausschließlich das selbst entwickelte WordPress-Theme, **nicht** WordPress-Core, Datenbank oder Docker-Konfiguration.

## Lokale Installation

1. WordPress in Docker starten.
2. Repository nach `C:\DevZone\drtami\www\wp-content\themes\drtami` klonen.
3. In WordPress unter **Design → Themes** das Theme **Dr. Tami** aktivieren.

Die Startseite wird aus `front-page.php` gerendert. Styles liegen unter `assets/css/main.css`.

Für die Übertragung zum Hoster wird nur dieser Theme-Ordner benötigt; WordPress-Core und Datenbank werden separat migriert.
