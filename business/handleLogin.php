<?php
require ("session.php");

if (isset($_POST['user']) && !empty($_POST['user']))
{

    $userInput = $_POST['user'];
    $passInput = $_POST['password'];
  


    require ("dbcon.php");
    $dbCon = dbCon($user, $pass);
    $query = $dbCon->prepare("SELECT id, userEmail, userPass FROM users WHERE userEmail = '$userInput'");
    $query->execute();
    $getUser = $query->fetchAll();

   

    if (empty($getUser)) { 
        echo "Error retrieving data from DB.";
    }

    if ($getUser[0][1] == $userInput && $getUser[0][2] == $passInput)
        {   
        
            $_SESSION["user_id"] = $getUser[0][0];
            echo $_SESSION["user_id"];


            echo "<br>We're equal! <br><br> <h1>Welcome tho the backend</h1>";
            header("Location: /dashboard");
        }
    else
        {
            echo "<br>Wrong user & password!";
            //header("Location: /login");
        }

}

else
    {
        echo "<br>Please input a password";
        header("Location: /login");
    }








    