<?php
require_once (__DIR__ . "/../../business/dbcon.php");
if (isset($_GET['ID'])) {
    $entryID = $_GET['ID'];
    $dbCon = dbCon();
    $query = $dbCon->prepare("DELETE FROM users WHERE id=$entryID");
    $query->execute();

    header("Location: manageUsers.php?status=deleted&ID=$entryID");
}else{
    header("Location: manageUsers.php?status=0");
}