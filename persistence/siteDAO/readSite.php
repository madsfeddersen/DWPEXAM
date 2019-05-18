<?php
    require_once (__DIR__ . "/../../business/dbcon.php");

    $user = "root";
    $pass = "";
    $dbCon = dbCon($user, $pass);
    $query = $dbCon->prepare("SELECT * FROM duck_shop");
    $query->execute();
    $getInfo = $query->fetchAll();
?>
