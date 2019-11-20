<?php
$statement = $pdo->prepare("SELECT * FROM offer ORDER BY createdate ASC");
?>

<div class="col-md-4 mb-5">
    <div class="card h-100">
      <img class="card-img-top" src="http://placehold.it/300x200" alt="">
      <div class="card-body">
          
        
          <?php while($row = $statement->fetch()){ ?>
            <h4 class='card-title'><?php echo $row['title']; ?> </h4>";
                <div class="card-text col">
                Preis
          <?php } ?>

          <div class="row">
            <div class="card-text col">
            Preis
              </div>
              <div class="card-text col">erstell Datum</div>
        </div>
      </div>
      <div class="card-footer">
        <a href="angebot.php?id=<?php echo $anzeigeNr; ?>" class="btn btn-primary">Beobachtung</a>
      </div>
    </div>
</div>