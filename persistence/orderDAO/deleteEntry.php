<?php
require_once (__DIR__ . "/../../business/dbcon.php");
if (isset($_GET['ID'])) {
    $entryID = $_GET['ID'];
    $dbCon = dbCon();
    $query = $dbCon->prepare("DELETE FROM orders WHERE id=$entryID");
    $query->execute();

    header("Location: manageOrders.php?status=deleted&ID=$entryID");
}else{
    header("Location: manageOrders.php?status=0");
}