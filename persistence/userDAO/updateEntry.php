<?php
require_once (__DIR__ . "/../../business/dbcon.php");
if (isset($_POST['entryID']) && isset($_POST['submit']))
{
    $entryID = $_POST['entryID'];

    $userEmail = $_POST['userEmail'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userPass = $_POST['userPass'];
    $userRank = $_POST['userRank'];
    
    $dbCon = dbCon($user, $pass);
    $query = $dbCon->prepare("UPDATE users SET userEmail='$userEmail', firstName='$firstName', lastName='$lastName', userPass='$userPass', userRank='$userRank' WHERE id = $entryID");
    $query->execute();

    header("Location: manageUsers.php?status=updated&ID=$entryID");
}
else
{
    header("Location: manageUsers.php?status=0");
}