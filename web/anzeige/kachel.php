<div class="col-md-4 mb-5">
    <div class="card h-100">
      <img class="card-img-top" src="http://placehold.it/300x200" alt="">
      <div class="card-body">
        <?php
          $statement = $pdo->prepare("SELECT * FROM offer ORDER BY createdate ASC");
          while($row = $statement->fetch()){
          echo "<h4 class='card-title'>".$row['title']." </h4>";
          
          }
          ?>
          <div class="row">
            <div class="card-text col">
            Preis
              </div>
              <div class="card-text col">erstell Datum</div>
        </div>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Beobachtung</a>
      </div>
    </div>
</div>