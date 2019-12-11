<?php
require_once __DIR__ . '/init.php';
require_once __DIR__ . '/inc/config.inc.php';
require_once __DIR__ . '/inc/functions.inc.php';

include __DIR__ . '/templates/header.inc.php';
if (is_checked_in()) {

if (isset($_POST['submit_button'])) {
    session_start();
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO offer (creatorid, title, description, price, price_method) VALUES (:creatorid, :title, :description, :price, :price_method)");
    $statement->execute(array('creatorid' => $_SESSION['userid'], 'title' => $_POST['form_title'], 'description' => $_POST['form_description'], 'price' => $_POST['form_price'], 'price_method' => $_POST['form_price_method']));
    header("location: " . dirname($_SERVER['PHP_SELF']) . '/');
}
?>
  <body class="bg-light" style="padding-top: 90px;">
    <div class="container">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Angebot erstellen</h4>
      <form method="post" action="erstellen.php" class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
          <hr class="mb-4">
            <label for="form_title">Titel</label>
            <input type="text" class="form-control" id="form_title" name="form_title" placeholder="" value="" required>
            <div class="invalid-feedback">
              Bitte geben Sie einen Title ein.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="mb-3">
          <label for="username">Preis</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">€</span>
            </div>
            <input type="text" class="form-control" id="form_price" name="form_price" placeholder="Preis" required>
            <div class="invalid-feedback" style="width: 100%;">
              Bitte geben Sie einen Preis ein.
            </div>
          </div>
        </div>
        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="fixed_price" name="form_price_method" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="fixed_price">Festpreis</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="basis_for_negotiation" name="form_price_method" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="basis_for_negotiation">Verhandlungsbasis</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="give_away" name="form_price_method" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="give_away">Zu verschenken</label>
          </div>
        </div>
        <hr class="mb-4">
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Kategorie</label>
            <select class="custom-select d-block w-100" id="form_category" name="form_category" required>
              <option value="">Auswählen...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Bitte wählen Sie eine Kategorie aus.
            </div>
          </div>
          <hr class="mb-4">
          <div class="col-md-6 mb-3">
            <label for="form_description">Beschreibung</label>
            <input type="text" class="form-control" id="form_description" name="form_description" placeholder="Beschreibe dein Angebot..." required>
            <div class="invalid-feedback">
              Bitte beschreibe dein Angebot.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit_button">Angebot erstellen</button>
      </form>
    </div>
    </div>
<?php
include __DIR__ . '/templates/footer.inc.php';
}else{
  header("Location: /bkwi1920/web/");
}
?>
