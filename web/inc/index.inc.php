<?php
require_once __DIR__ . '/inc/config.inc.php';
class offerobj{
    $sql = "select * from offer order by id asc limit 10";
    $Ergebnis = $pdo->query($sql);
    
    while($row = $Ergebnis->fetch()){
        $offerobj = offer();
        $offerobj->id=$row['id'];
        $offerobj->creatorid=$row['creatorid'];
        $offerobj->title=$row['title'];
        $offerobj->createdate=$row['createdate'];
        $offerobj->description=$row['description'];
        $offerobj->price=$row['price'];
    }  
}
?>