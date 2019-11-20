<?php
require_once("config.inc.php");

function getIndexList() {
    global $pdo;
    $sql = "select * from offer order by id asc limit 10";
    $Ergebnis = $pdo->query($sql);
    
    while($row = $Ergebnis->fetch()){
        $offerobj->id=$row['id'];
        $offerobj->creatorid=$row['creatorid'];
        $offerobj->title=$row['title'];
        $offerobj->createdate=$row['createdate'];
        $offerobj->description=$row['description'];
        $offerobj->price=$row['price'];
    }  
    return $offerobj->id;
}
?>
