<?php

// If the form is submitted 
if(isset($_POST['submit'])){ 
    $postData = $_POST; 
     
   

    // Validate form fields 
    if(!empty($_POST['userEmail']) && !empty($_POST['userPass']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])  ){ 
         


        // Validate reCAPTCHA box 
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
            // Google reCAPTCHA API secret key 
            $secretKey = '6LchXaEUAAAAAMgUiUcUXKlMcK24aQDWP1MpSwbA'; 
             
            // Verify the reCAPTCHA response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
             
            // Decode json data 
            $responseData = json_decode($verifyResponse); 
             
            // If reCAPTCHA response is valid 
            if($responseData->success){ 

                

                require_once (__DIR__ . "/../../business/dbcon.php");
                

                    $userEmail = $_POST['userEmail'];
                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $userPass = $_POST['userPass'];
                    $userRank = $_POST['userRank'];

                $dbCon = dbCon();
                $query = $dbCon->prepare("INSERT INTO users (`userEmail`, `userPass`, `firstName`, `lastName`, `userRank`) VALUES ('$userEmail', '$userPass', '$firstName', '$lastName',  '$userRank')");
                $query->execute();
                    header("Location: /login");
                

                
                }
                else
                { 
                    $statusMsg = 'Robot verification failed, please try again.'; 
                    //header("Location: /signup");
                } 
            }
            else
            { 
                $statusMsg = 'Please check on the reCAPTCHA box.'; 
                //header("Location: /signup");
            } 
        }
        else
        { 
            $statusMsg = 'Please fill all the mandatory fields.'; 
            //header("Location: /signup");
        } 
} 

?>

