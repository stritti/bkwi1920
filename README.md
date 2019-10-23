# bkwi1920
Tauschplatform - BKWI2 2019/2020

## Entwicklungsumgebung

Für die Entwicklung bieten sich folgende Programme an:

* Server: XAMPP(Apache, PHP, MySQL)
* IDE: VS Code, Brackets, PHP Storm, Atom
* GIT: SourceTree

### XAMPP einrichten

* XAMPP Light (Light reicht aus!) herunterladen: https://portableapps.com/de/apps/development/xampp
* Setup ausführen (Tomcat, FileZilla FTP Server, Webalizer können DEAKTIVIERT werden)
* Konfiguration anpassen:
  `C:\xampp\apache\conf\httpd.conf` öffnen und am Ende folgende Zeilen einfügen (Pfad anpassen!)

    ``` bash
    Alias "/bkwi" "C:\Projekte\BKWI\bkwi1920\web"
    <Directory "C:\Projekte\BKWI\bkwi1920\web">
        Require all granted
    </Directory>
    ```

 Dabei ist `C:\Projekte\BKWI\bkwi1920` das Verzeichnis des Projekte und `C:\xampp` das Installationsverzeichnisvon XAMPP.
