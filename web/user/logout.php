<?php
session_start();
session_destroy();
unset($_SESSION['userid']);

require_once __DIR__ . '/../init.php';
require_once __DIR__ . '/../vendor/autoload.php';

//Remove Cookies
setcookie("identifier","",time()-(3600*24*365));
setcookie("securitytoken","",time()-(3600*24*365));


include __DIR__ . '/../templates/header_user.inc.php';
header('Location: /bkwi1920/web/');


include __DIR__ . "/../templates/footer.inc.php";
?>
