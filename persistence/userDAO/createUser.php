<?php
// If the form is submitted 
if(isset($_POST['submit']))
{ 
    $postData = $_POST; 
    
    // Validate form fields 
    if(!empty($_POST['userEmail']) && !empty($_POST['userPass']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])  )
    { 
         
        // Validate reCAPTCHA box 
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
        { 
            // Google reCAPTCHA API secret key 
            $secretKey = '6LchXaEUAAAAAMgUiUcUXKlMcK24aQDWP1MpSwbA'; 
             
            // Verify the reCAPTCHA response 
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
             
            // Decode json data 
            $responseData = json_decode($verifyResponse); 
             
            // If reCAPTCHA response is valid 
            if($responseData->success)
            { 
                require_once (__DIR__ . "/../../business/dbcon.php");
                $userEmail = strip_tags($_POST['userEmail']);
                $firstName = strip_tags($_POST['firstName']);
                $lastName = strip_tags($_POST['lastName']);
                $userPass = strip_tags($_POST['userPass']);

                $dbCon = dbCon();
                $query = $dbCon->prepare("INSERT INTO users (`userEmail`, `userPass`, `firstName`, `lastName`, `userRank`) VALUES (:userEmail, :userPass, :firstName, :lastName, 3)");
                $query->bindParam(':userEmail', $userEmail);
                $query->bindParam(':userPass', $userPass);
                $query->bindParam(':firstName', $firstName);
                $query->bindParam(':lastName', $lastName);
                $query->execute();
                
                header("Location: /login");
            }
            else
            { 
                $statusMsg = 'Robot verification failed, please try again.'; 
                ("Location: /signup");
            } 
        }
        else
        { 
            $statusMsg = 'Please check on the reCAPTCHA box.'; 
            ("Location: /signup");
        } 
    }
    else
    { 
        $statusMsg = 'Please fill all the mandatory fields.'; 
        ("Location: /signup");
    } 
} 

?>

