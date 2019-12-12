<?php
session_start();
require_once __DIR__ . '/inc/config.inc.php';
require_once __DIR__ . '/inc/functions.inc.php';
require_once __DIR__ . '/templates/header.inc.php';
?>
<?php
global $pdo;
$statement = $pdo->prepare("SELECT * FROM offer, users WHERE offer.creatorid = users.id AND offer.id = :id");
$statement->execute(array(':id' => $_GET['id']));
while ($row = $statement->fetch()) {
?>

<div class="container">

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

    <div class="row">
        <h1 class="col-10"><?php echo $row['title'];?></h1>
        <h2 class="col-2">
            <span class="pricetag"><?php echo $row['price'];?> €</span>
        </h2>
    </div>

    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary">
                Boebachtung <span class="badge badge-warning">0</span>
            </button>
        </div>
        <div class="btn-group mr-2" role="group" aria-label="Second group">
            <button type="button" class="btn btn-secondary">Interesse</button>
        </div>
    </div>


    <div class="row">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <?php echo $row['nachname'] . ", " . $row['vorname'];?>
            </li>
            <li class="list-group-item">
                <?php echo $row['class'];?>
            </li>
        </ul>
    </div>

    <div class="row">
        <p class="col text-left"><?php echo $row['description'];?></p>
    </div>

</div>
<?php
}
?>
<?php
include __DIR__ . '/templates/footer.inc.php';
?>
