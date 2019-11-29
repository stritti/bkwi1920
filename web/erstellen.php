<?php
require_once __DIR__ . '/init.php';
require_once __DIR__ . '/inc/config.inc.php';
require_once __DIR__ . '/inc/functions.inc.php';

include __DIR__ . '/templates/header.inc.php';


if (isset($_POST['button'])) {
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO users (title, description, price) VALUES (:title, :description, :price)");
    $statement->execute(array('title' => form_title, 'description' => form_description, 'price' => form_price));
}
?>

      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Anzeige erstellen</h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                  <label class="custom-control-label" for="credit">Ich biete...</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="debit">Ich suche...</label>
                </div>
            </div>

          <form class="needs-validation" action="erstellen.php" method="post" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Titel</label>
                <input type="text" class="form-control" name="form_title" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                    <label for="firstName">Preis</label>
                    <input type="text" class="form-control" name="form_price" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Beschreibung</label>
                <textarea class="form-control" aria-label="With textarea" name="form_description"></textarea>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <button type="button" name="button" class="btn btn-primary btn-lg">Anzeige erstellen</button>
            </form>
        </div>
    </div>



<?php
include __DIR__ . '/templates/footer.inc.php';
?>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
