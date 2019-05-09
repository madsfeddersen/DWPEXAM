<?php
require_once ("business/dbcon.php");
if (isset($_GET['ID'])) {
    $entryID = $_GET['ID'];
    $dbCon = dbCon($user, $pass);
    $query = $dbCon->prepare("DELETE FROM users WHERE id=$entryID");
    $query->execute();

    header("Location: backendtest.php?status=deleted&ID=$entryID");
}else{
    header("Location: backendtest.php?status=0");
}