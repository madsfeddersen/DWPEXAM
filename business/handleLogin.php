<?php
require ("session.php");

if (isset($_POST['user']) && !empty($_POST['user']))
{

    $userInput = $_POST['user'];
    $passInput = $_POST['password'];
  
    require ("dbcon.php");
    $dbCon = dbCon();
    //$query = $dbCon->prepare("SELECT id, userEmail, userPass FROM users WHERE userEmail = '$userInput'");
    $query = $dbCon->prepare("SELECT * FROM users WHERE userEmail = :userInput");
    $query->bindValue(":userInput", $userInput);
    $query->execute();
    $getUser = $query->fetchAll();

    if (empty($getUser)) { 
        echo "Didn't retrieve data from DB, might be because of wrong credentials.";
    }
    
    if ($getUser[0][1] == $userInput && $getUser[0][2] == $passInput)
        {   
            $_SESSION["user_id"] = $getUser[0][0];
            $_SESSION["userName"] = $getUser[0][1];
            $_SESSION['firstName'] = $getUser[0][3];
            $_SESSION['lastName'] = $getUser[0][4];

            echo "<br>Input credentials matched!<br><br><h1>Welcome to the backend</h1>";
            header("Location: /dashboard");
        }
    else
        {
            echo "<br>Wrong email or password!<br>Try again!";
            echo "<br>You will be redirected back in 5 seconds.";
            header( "Refresh:5; url=/login", true, 303);
            //header("Location: /login");
        }
}

else
    {
        echo "<br>Please input a password";
        header("Location: /login");
    }








    