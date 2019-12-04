<?php 
session_start();
require_once __DIR__ . '/init.php';
require_once __DIR__ . '/inc/config.inc.php';
require_once __DIR__ . '/inc/functions.inc.php';

include __DIR__ . '/templates/header.inc.php';
?>
   <!-- Header -->
   <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Radolfzell School Sale2</h1>
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
global $pdo;

$statement = $pdo->prepare("SELECT * FROM offer ORDER BY createdate ASC LIMIT 5");
$statement->execute();
while($row = $statement->fetch()){
  echo ("<div class='col-md-4 mb-5'>");
    echo ("<div class='card h-100'>");
    echo ("<img class='card-img-top' src='http://placehold.it/300x200' alt=''>");
      echo ("<div class='card-body'>");
      echo ("<h4 class='card-title'>" . $row['title'] . "</h4>");
        echo ("<div class='card-text col'>");
          echo ("<div class='row'>");
  echo ("<div class='card-text col'>erstell Datum</div>");
  echo ("</div></div><div class='card-footer'>");
  echo ("<a href='angebot.php?id=$row[id]' class='btn btn-primary'>Beobachtung</a>");
  echo ("</div></div></div></div>");
}
echo ("</div></div>");
  ?>
    <!-- /.row -->
  </div>
  <!-- /.container -->
<?php 
include("templates/footer.inc.php")
?>
