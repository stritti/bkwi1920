<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Loginscript</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo dirname($_SERVER['PHP_SELF']) . '/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo dirname($_SERVER['PHP_SELF']) . '/css/styles.css';?>" rel="stylesheet">
  </head>
  <body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="<?php echo dirname($_SERVER['PHP_SELF']) . '/index.php';?>"><img src="<?php echo dirname($_SERVER['PHP_SELF']) . '/img/Logo.png';?>" alt="Logo" width="60px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <?php if(!is_checked_in()) : ?>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo dirname($_SERVER['PHP_SELF']) . '/user/login.php';?>">Anmelden</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo dirname($_SERVER['PHP_SELF']) . '/user/register.php';?>">Registrieren</a>
          </li>
        </ul>
      </div>
        <?php else: ?>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo dirname($_SERVER['PHP_SELF']) . '/erstellen.php';?>">Neuen Eintrag erstellen</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo dirname($_SERVER['PHP_SELF']) . '/user/settings.php';?>">Einstellungen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo dirname($_SERVER['PHP_SELF']) . '/user/logout.php';?>">Abmelden</a>
          </li>
        </ul>
      </div>
        <?php endif; ?>
      </div>
    </nav>
