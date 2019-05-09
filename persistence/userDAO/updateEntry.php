<?php
require_once (__DIR__ . "/../../business/dbcon.php");
if (isset($_POST['entryID']) && isset($_POST['submit'])) {

    $userEmail = $_POST['userEmail'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userPass = $_POST['userPass'];
    $userRank = $_POST['userRank'];

    $dbCon = dbCon($user, $pass);
    $query = $dbCon->prepare("UPDATE users SET `userEmail`='$userName', `firstName`='$firstName', `lastName`='$lastName', `userPass`='$userPass', `userRank`='$userRank' WHERE ID=$entryID");
    $query->execute();
    header("Location: /presentation/backend/backend2.php?status=updated&ID=$entryID");

}else{
    header("Location: /presentation/backend/backend2.php?status=0");
}