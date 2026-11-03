# Dr. Tami – WordPress Theme

Dieses Repository enthält ausschließlich das selbst entwickelte WordPress-Theme, **nicht** WordPress-Core, Datenbank oder Docker-Konfiguration.

## Lokale Installation

1. WordPress in Docker starten.
2. Repository nach `C:\DevZone\drtami\www\wp-content\themes\drtami` klonen.
3. In WordPress unter **Design → Themes** das Theme **Dr. Tami** aktivieren.

Die Startseite wird aus `front-page.php` gerendert. Styles liegen unter `assets/css/main.css`.

Für die Übertragung zum Hoster wird nur dieser Theme-Ordner benötigt; WordPress-Core und Datenbank werden separat migriert.

## Bildplatzhalter

Die Templates verwenden an mehreren Stellen `assets/images/placeholder.webp` als austauschbares Bild. Die Datei wird **separat bereitgestellt** und muss lokal in diesen Ordner kopiert werden, bevor die Bildplätze angezeigt werden können. Danach kann sie mit Git committet werden.

Jeder Bildplatz enthält einen **englischen Tooltip** (`title`) mit einer Beschreibung des gewünschten späteren Motivs. Eine sichtbare Beschriftung zeigt den Bildtyp. Ersetze das Platzhalterbild später durch freigegebene, geeignete Praxisfotos.
