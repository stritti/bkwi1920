<?php
session_start();
require_once __DIR__ . '/inc/config.inc.php';
require_once __DIR__ . '/inc/functions.inc.php';
include __DIR__ . '/templates/header.inc.php';
?>
   <!-- Header -->
   <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Radolfzell School Sale</h1>
          <p class="lead mb-5 text-white-50">Seite zum Gegenstände verkaufen am Bodensee BSZ Radolfzell</p>
        </div>
      </div>
    </div>
  </header>
  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>Die Angebote</h2>
        <hr>
        <p></p>
        <a class="btn btn-primary btn-lg" href="#">Kategorie &raquo;</a>
      </div>
      <div class="col-md-4 mb-5">

      </div>
    </div>
    <!-- /.row -->

    <div class="row">
<?php
echo "" . getIndexList();
global $anzeigeNr;
for($anzeigeNr=0; $anzeigeNr < 10; $anzeigeNr++) {
   //echo "$i, ";
   include("anzeige/kachel.php");

}

  ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php
include("templates/footer.inc.php")
?>
