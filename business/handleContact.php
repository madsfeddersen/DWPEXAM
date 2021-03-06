<?php 
$postData = $statusMsg = ''; 
$status = '';

// If the form is submitted 
if(isset($_POST['submit'])){ 
    $postData = $_POST; 
     
    // Validate form fields 
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){ 
         
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
                $name = strip_tags(!empty($_POST['name'])?$_POST['name']:''); 
                $email = strip_tags(!empty($_POST['email'])?$_POST['email']:''); 
                $message = strip_tags(!empty($_POST['message'])?$_POST['message']:''); 
                 
                // Send email notification to the site admin 
                $to = 'duckshopdwp@gmail.com'; 
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
                
                header("Location: /contact");
            }
            else
            { 
                $statusMsg = 'Robot verification failed, please try again.'; 
                header("Location: /contact");
            } 
        }
        else
        { 
            $statusMsg = 'Please check on the reCAPTCHA box.'; 
            header("Location: /contact");
        } 
    }
    else
    { 
        $statusMsg = 'Please fill all the mandatory fields.'; 
        header("Location: /contact");
    } 
} 

?>

