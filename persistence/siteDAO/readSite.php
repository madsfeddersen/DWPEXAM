<?php
    require_once (__DIR__ . "/../../business/dbconFooter.php");
    $dbCon = dbConFooter();
    $query = $dbCon->prepare("SELECT * FROM duck_shop");
    $query->execute();
    $getInfo = $query->fetchAll();
    
?>
