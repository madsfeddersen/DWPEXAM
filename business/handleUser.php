<?php
require( __DIR__ . "/../persistence/userDAO.php" );

$action = $_GET["action"];

if ($action == "create")
{
	$userEmail = $_POST["userEmail"];
    $userPass = $_POST["userPass"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $userRank = $_POST["userRank"];
    createUser($userEmail, $userPass, $firstName, $lastName, $userRank); 
}

else if ($action == "edit")
{
	$userEmail = $_POST["userEmail"];
    $userPass = $_POST["userPass"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $userRank = $_POST["userRank"];
    $userID = $_POST["userID"]; 
    updateUser($userEmail, $userPass, $firstName, $lastName, $userRank, $userID);
    
}

else if ($action == "delete")
{
	$userID  = $_GET["userID"];
    deleteUser($userID);
}

header("Location: /backend");