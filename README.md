# Startup-Projekt

Startup-Projekt als Projektarbeit im Berufskolleg Wirtschaftsinformatik 2 2019/2020
am BSZ Radolfzell.

## Teams

Die Schulklasse ist in folgende Teams aufgeteilt:

* Marktforschung
* Marketing
* Controlling
* Webdesign
* Entwicklung
* Projektmanagement

## Produkt

Das Startupentwickelt als Produkt eine Tauschplattform für den Verkauf/Tausch von
Produkten und Dienstleistungen innerhalb der Schule.

Die Produktidee wurde in Pitches vorab in der Klassee als Favorit gewählt.

## Entwicklungsumgebung

Für die Entwicklung bieten sich folgende Programme an:

* Server: XAMPP(Apache, PHP, MySQL)
* IDE: VS Code, Brackets, PHP Storm, Atom, o.ä.
* GIT: SourceTree

### XAMPP einrichten

* XAMPP Light (die Light-Version reicht aus!) herunterladen: <https://portableapps.com/de/apps/development/xampp>
* Setup ausführen (Tomcat, FileZilla FTP Server, Webalizer können DEAKTIVIERT werden)
* Konfiguration anpassen:
  `C:\xampp\apache\conf\httpd.conf` öffnen und **am Ende** folgende Zeilen einfügen (Pfad anpassen!)

    ``` bash
    Alias "/bkwi" "C:\Projekte\BKWI\bkwi1920\web"
    <Directory "C:\Projekte\BKWI\bkwi1920\web">
        Require all granted
    </Directory>
    ```

    Dabei ist `C:\Projekte\BKWI\bkwi1920` das Verzeichnis des Projekte und `C:\xampp` das Installationsverzeichnisvon XAMPP.
* Nun kann Apache und MySQLüber das XAMPP-Controlpanel gestartet werden.
* Das Projekt ist jetzt unter <http://localhost/bkwi/> erreichbar.

## Unterstützung

Das Projekt wird durch die [Sybit GmbH](https://www.sybit.de) mit Coaching unterstützt.

## Lizenz

[LICENSE](LICENSE)
