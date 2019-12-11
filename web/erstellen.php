<?php
require_once __DIR__ . '/init.php';
require_once __DIR__ . '/inc/config.inc.php';
require_once __DIR__ . '/inc/functions.inc.php';

include __DIR__ . '/templates/header.inc.php';


if (isset($_POST['button'])) {
    session_start();
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO offer (creatorid, title, description, price) VALUES (:creatorid, :title, :description, :price)");
    $statement->execute(array('creatorid' => $_SESSION['userid'], 'title' => $_POST['form_title'], 'description' => $_POST['form_description'], 'price' => $_POST['form_price']));
    header("location: " . dirname($_SERVER['PHP_SELF']) . '/');
}
?>

      <div class="row">
        <div class="col-md-4 order-md-1">
          <h3 class="mb-3">Angebot erstellen</h3>


          <form method="post" action="" class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="title">Titel</label>
                <input type="text" class="form-control" id="title" name="form_title" placeholder="Bezeichnung " value="" required>
                <div class="invalid-feedback">
                  Title is required.
                </div>
              </div>

              <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Kategorie
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div>

              <div class="col-md-4 mb-3">
                    <label for="price">Preis</label>
                    <input type="number" class="form-control" id="price" name="form_price" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Price is required.
                    </div>
                  </div>
              <div class="col-md-4 mb-3">
                <label for="description">Beschreibung</label>
                <textarea class="form-control" aria-label="With textarea" id="description" name="form_description"></textarea>
                <div class="invalid-feedback">
                  Description is required.
                </div>
              </div>
            </div>
            <button type="submit" name="button" class="btn btn-primary btn-lg">Anzeige erstellen</button>
            </form>
        </div>
    </div>



<?php
include __DIR__ . '/templates/footer.inc.php';
?>
