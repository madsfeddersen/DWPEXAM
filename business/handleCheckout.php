<?php

echo 'Do stuff';
var_dump($_SESSION);

$postData = $statusMsg = ''; 
$status = '';

// If the form is submitted 
if(isset($_POST['submit'])){ 
    $postData = $_POST; 
     
    // Validate checkout form fields 
    if(!empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['adr']) && !empty($_POST['city']) && !empty($_POST['zip']) && !empty($_POST['cname']) && !empty($_POST['ccnum']) && !empty($_POST['expmonth']) && !empty($_POST['expyear']) && !empty($_POST['cvv']))
    { 
         
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
                // Posted form data 
                $fname = !empty($_POST['fname'])?$_POST['fname']:''; 
                $email = !empty($_POST['email'])?$_POST['email']:''; 
                $adr = !empty($_POST['adr'])?$_POST['adr']:''; 
                $city = !empty($_POST['city'])?$_POST['city']:''; 
                $zip = !empty($_POST['zip'])?$_POST['zip']:''; 
                $cname = !empty($_POST['cname'])?$_POST['cname']:''; 
                $ccnum = !empty($_POST['ccnum'])?$_POST['ccnum']:'';
                $expmonth = !empty($_POST['expmonth'])?$_POST['expmonth']:''; 
                $expyear = !empty($_POST['expyear'])?$_POST['expyear']:'';
                $expcvv = !empty($_POST['expcvv'])?$_POST['expcvv']:''; 
                 
                // Send email notification to the site admin 
                $to = 'andreas.madum1@gmail.com'; 
                $subject = 'New contact form have been submitted'; 
                $htmlContent = " 
                    <h1>Contact request details</h1> 
                    <p><b>Name: </b>".$name."</p> 
                    <p><b>Email: </b>".$email."</p> 
                    <p><b>Message: </b>".$message."</p> 
                "; 
                 
                // Always set content-type when sending HTML email 
                $headers = "MIME-Version: 1.0" . "\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
                // More headers 
                $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n"; 
                 
                // Send email 
                @mail($to,$subject,$htmlContent,$headers); 
                 
                $status = 'success'; 
                $statusMsg = 'Your contact request has submitted successfully.'; 
                $postData = '';
                
                header("Location: /checkout");
            }
            else
            { 
                $statusMsg = 'Robot verification failed, please try again.'; 
                header("Location: /checkout");
            } 
        }
        else
        { 
            $statusMsg = 'Please check on the reCAPTCHA box.'; 
            header("Location: /checkout");
        } 
    }
    else
    { 
        $statusMsg = 'Please fill all the mandatory fields.'; 
        header("Location: /checkout");
    } 
} 

?>