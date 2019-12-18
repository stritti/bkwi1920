<?php
session_start();
require_once __DIR__ . '/init.php';
require_once __DIR__ . '/inc/config.inc.php';
require_once __DIR__ . '/inc/functions.inc.php';
include __DIR__ . '/templates/header.inc.php';
?>
  
  <body class="bg-light" style="padding-top: 90px;">
    <div class="container">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Meine Beobachtungen</h4>
      </div>
      <div class="row">
          <div class="col-md-6 mb-3">
      <hr class="mb-4">
      </div></div>
<?php
global $pdo;
$statement = $pdo->prepare("SELECT offer.id, offer.title, offer.price, offer.createdate, offer.price_method, category.value FROM offer, category where offer.category = category.id ORDER BY createdate DESC LIMIT 10;");
$statement->execute(array());
while ($row = $statement->fetch()) {
?>

        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <a style="text-align: left" href="angebot.php?id=<?php echo $row['id']; ?>">
                    <img class="card-img-top" src="http://placehold.it/300x200" alt="<?php echo $row['title'];?>">
                </a>
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                          <a style="text-align: left" href="angebot.php?id=<?php echo $row['id']; ?>">
                              <h4 class='card-title'><?php echo $row['title'];?></h4>
                          </a>
                          <span class="badge badge-primary"><?php echo $row['value'];?></span>
                        </div>
                        <div class="col-4">
                            <h4 class="card-text text-right">
                            <?php
                            if ($row['price_method'] == "vb_price") {
                              $price_method = "VB";
                            }else{
                              $price_method = "";
                            }
                            ?>
                                <span class="pricetag"><?php echo $row['price'];?> € <?php echo $price_method;?></span>
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <a class="btn btn-primary text-left" href="angebot.php?id=<?php echo $row['id']; ?>" >mehr &raquo;</a>
                    <span class="badge text-right"><?php echo $row['createdate'];?></span>
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
