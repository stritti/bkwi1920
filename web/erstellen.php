<?php
require_once __DIR__ . '/init.php';
require_once __DIR__ . '/inc/config.inc.php';
require_once __DIR__ . '/inc/functions.inc.php';

include __DIR__ . '/templates/header.inc.php';
if (is_checked_in()) {

if (isset($_POST['submit_button'])) {
    session_start();
    global $pdo;

    $preview_pictrue = fread(fopen($preview_pictrue, "r"), filesize($preview_pictrue));
    $preview_pictrue = addslashes($preview_pictrue);

    $statement = $pdo->prepare("INSERT INTO offer (creatorid, title, description, price, price_method, category) VALUES (:creatorid, :title, :description, :price, :price_method, :category, :preview_pictrue)");
    $statement->execute(array('creatorid' => $_SESSION['userid'], 'title' => $_POST['form_title'], 'description' => $_POST['form_description'], 'price' => $_POST['form_price'], 'price_method' => $_POST['form_price_method'], 'category' => $_POST['form_category'], 'preview_pictrue' => $preview_pictrue));
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
            <input id="fixed_price" name="form_price_method" type="radio" class="custom-control-input" value="fixed_price" checked required>
            <label class="custom-control-label" for="fixed_price" value="fixed_price">Festpreis</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="basis_for_negotiation" name="form_price_method" type="radio" class="custom-control-input" value="vb_price" required>
            <label class="custom-control-label" for="basis_for_negotiation">Verhandlungsbasis</label>
          </div>
        </div>
        <hr class="mb-4">
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Kategorie</label>
            <select class="custom-select d-block w-100" id="form_category" name="form_category" required>
              <option value="">Auswählen...</option>
              <?php
              global $pdo;
              $statement = $pdo->prepare("SELECT * FROM category ORDER BY value ASC;");
              $statement->execute(array());
              while ($row = $statement->fetch()) {
                echo "<option value='" . $row['id'] . "'>" . $row['value'] . "</option>";
              }
              ?>
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
        <br />
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Vorschau</span>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="preview_pictrue" name="preview_pictrue" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Wähle dein Bild aus</label>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit_button">Angebot erstellen</button>
      </form>
    </div>
    </div>
    <br />
    <br />
<?php
include __DIR__ . '/templates/footer.inc.php';
}else{
  header("Location: /bkwi1920/web/");
}
?>
