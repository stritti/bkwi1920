# bkwi1920
Tauschplatform - BKWI2 2019/2020


# XAMPP einrichten

* XAMPP Light herunterladen
* Konfiguration anpassen: 
  `C:\xampp\apache\conf\httpd.conf` öffnen und am Edne folgende Zeilen einfügen (Pfad anpassen!)

```
Alias "/bkwi" "C:\Projekte\BKWI\bkwi1920\web"
<Directory "C:\Projekte\BKWI\bkwi1920\web">
	Require all granted
</Directory>

``` 