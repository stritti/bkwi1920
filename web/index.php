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
global $pdo;
$statement = $pdo->prepare("SELECT * FROM offer ORDER BY createdate DESC LIMIT 10;");
$statement->execute(array());
while($row = $statement->fetch()) {
?>

        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <a style="text-align: left" href="angebot.php?id=<?php echo $row['id']; ?>">
                    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                </a>
                <div class="card-body">
                    <a style="text-align: left" href="angebot.php?id=<?php echo $row['id']; ?>">
                        <h4 class='card-title'><?php echo $row['title'];?></h4>
                    </a>
                    <div style="text-align: right">
                        <div class="row">
                            <div class="card-text col"><?php echo $row['price'];?> €</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a style="text-align: left" href="angebot.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Beobachtung</a>
                        <span class="badge"><?php echo $row['createdate'];?></span>
                    </div>
                </div>
            </div>
        </div>
<?php
}
?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
<?php
include __DIR__ . '/templates/footer.inc.php';
?>
