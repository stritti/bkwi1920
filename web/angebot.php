<?php
session_start();
require_once __DIR__ . '/inc/config.inc.php';
require_once __DIR__ . '/inc/functions.inc.php';
include __DIR__ . '/templates/header.inc.php';
?>
<?php
global $pdo;
$statement = $pdo->prepare("SELECT * FROM offer,users WHERE id = :id");
$statement->execute(array(':id' => $_GET['id']));
while($row = $statement->fetch()) {
?>

<h1><?php echo $row['title'];?> <span class="badge badge-secondary">New</span></h1>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://via.placeholder.com/350x128" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/350x128" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/350x128" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<p class="text-xl-center"><?php echo $row['price'];?> €</p>

<div class="container">
<div class="row justify-content-center">
    <div class="col-sm-4">
      <?php echo $row['name'];?>
    </div>
    <div class="col-sm-">
     <?php echo $row['class']?>
    </div>
  </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-sm-4">
<button type="button" class="btn btn-secondary">
Beobachten  <span class="badge badge-warning">0</span>
</button>
    </div>
        <div class="col-sm-">
<input class="btn btn-secondary" type="submit" value="Interesse">
      </div>
      </div>

      <p class="text-center"><?php echo $row['description'];?></p>

<?php
}
?>
<?php
include __DIR__ . '/templates/footer.inc.php';
?>
