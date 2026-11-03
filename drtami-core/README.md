# Dr. Tami – einfache Websiteverwaltung

Dieses Verzeichnis enthält ein eigenständiges WordPress-Plugin. **Es wird nicht automatisch durch das Theme aktiviert.**

## Installation in der lokalen Docker-Umgebung

In PowerShell im Theme-Verzeichnis ausführen:

```powershell
Copy-Item -Recurse -Force .\drtami-core ..\..\plugins\drtami-core
```

Danach im WordPress-Backend **Plugins → Installierte Plugins → Dr. Tami – Websiteverwaltung → Aktivieren** wählen. Im linken Menü erscheint **Meine Website**.

Beim späteren Update des Plugins dieselben Dateien erneut in den Plugin-Ordner kopieren (bestehende Dateien ersetzen). Für produktive Installationen Plugin als ZIP paketieren und über WordPress installieren.

## Was bearbeitbar ist

- Kontaktdaten, Ordinationsadresse, Preis, Dauer; E-Mail-Empfänger des Kontaktformulars
- Fünf Bilder über die WordPress-Mediathek
- Ausgewählte Startseiten-, Profil- und Kontakttexte jeweils in RO, EN, DE
- Artikel weiterhin über **Beiträge** im WordPress-Backend und Polylang

Leere Felder behalten die bisherigen Texte und Bilder. Vorhandene Beiträge werden nicht überschrieben. Änderungen sind nach dem Speichern sofort öffentlich.

## Grenzen dieser ersten Version

Nicht sämtliche Texte und medizinischen Leistungslisten sind editierbar. FAQ und vollständige „Über mich“-Inhalte sollen in einem weiteren Schritt als strukturierte Felder folgen. Für einen sicheren Veröffentlichungsprozess können später Entwürfe und Vorschau ergänzt werden.

Die Verwaltungsseite ist für Benutzer mit `edit_pages` sichtbar; die WordPress-Benutzerrechte sollten vor Übergabe bewusst konfiguriert werden. WordPress-Administratoren behalten weiterhin Zugriff auf Themes, Plugins und technische Einstellungen.

## Wichtiger Test

Vor produktiver Nutzung das Plugin lokal aktivieren und testen: Texte in RO/EN/DE, Bildauswahl, Telefonnummer/WhatsApp-Link, E-Mail-Empfänger, Formularversand, Preis und Zurücksetzen auf Standardwerte.
