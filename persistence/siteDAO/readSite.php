<?php
    
    require (__DIR__ . "/../../business/dbcon.php");
    $user = "root";
    $pass = "";
    $dbCon = dbCon();
    $query = $dbCon->prepare("SELECT * FROM duck_shop");
    $query->execute();
    $getInfo = $query->fetchAll();
    
?>
