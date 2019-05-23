<?php
    require_once (__DIR__ . "/../../business/dbconFooter.php");
    $dbCon = dbConFooter();
    $sql = "CALL `getFooter`();"; 
    $query = $dbCon->prepare($sql);
    $query->execute();
    $getInfo = $query->fetchAll();
?>


