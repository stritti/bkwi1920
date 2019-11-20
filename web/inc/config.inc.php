<?php
/**
 * @author: Nils Reimers http://www.php-einfach.de/experte/php-codebeispiele/loginscript/
 * @license: GNU GPLv3
 */

//Tragt hier eure Verbindungsdaten zur Datenbank ein
$db_host = 'localhost';
$db_name = 'bkwi1920';
$db_user = 'bkwi';
$db_password = '5lKFZFK5eAjmNJB5';

$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
