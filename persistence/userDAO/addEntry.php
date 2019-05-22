<?php
require_once (__DIR__ . "/../../business/dbcon.php");
if (isset($_POST['submit'])) {

    require_once (__DIR__ . "/../../business/dbcon.php");
                $userEmail = strip_tags($_POST['userEmail']);
                $firstName = strip_tags($_POST['firstName']);
                $lastName = strip_tags($_POST['lastName']);
                $userPass = strip_tags($_POST['userPass']);
                $userRank = strip_tags($_POST['userRank']);

                $dbCon = dbCon();
                $query = $dbCon->prepare("INSERT INTO users (`userEmail`, `userPass`, `firstName`, `lastName`, `userRank`) VALUES (:userEmail, :userPass, :firstName, :lastName, :userRank)");
                $query->bindParam(':userEmail', $userEmail);
                $query->bindParam(':userPass', $userPass);
                $query->bindParam(':firstName', $firstName);
                $query->bindParam(':lastName', $lastName);
                $query->bindParam(':userRank', $userRank);
                $query->execute();
                
    header("Location: manageUsers.php?status=added");
}

else
    {
        header('Location: ' . __DIR__ . 'persistence/userDAO/manageUsers.php?status=0');
    }
?>

