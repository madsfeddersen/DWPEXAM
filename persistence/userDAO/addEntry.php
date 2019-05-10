<?php
require_once (__DIR__ . "/../../business/dbcon.php");
if (isset($_POST['submit'])) {

$userEmail = $_POST['userEmail'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userPass = $_POST['userPass'];
$userRank = $_POST['userRank'];

$dbCon = dbCon($user, $pass);
$query = $dbCon->prepare("INSERT INTO users (`userEmail`, `userPass`, `firstName`, `lastName`, `userRank`) VALUES ('$userEmail', '$userPass', '$firstName', '$lastName',  '$userRank')");
$query->execute();
    header("Location: manageUsers.php?status=added");
}

else
    {
        header('Location: ' . __DIR__ . 'persistence/userDAO/manageUsers.php?status=0');
    }
?>

