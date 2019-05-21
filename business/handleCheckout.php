<?php



$postData = $statusMsg = ''; 
$status = '';

if(isset($_POST['submit']))
{ 
    $postData = $_POST; 

    //Send invoice to user
        
    // Validate checkout form fields 
    if(!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['zip']) && !empty($_POST['cardname']) && !empty($_POST['cardnumber']) && !empty($_POST['expmonth']) && !empty($_POST['expyear']) && !empty($_POST['cvv']))
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

                $fname = !empty($_POST['fullname'])?$_POST['fullname']:''; 
                $email = !empty($_POST['email'])?$_POST['email']:''; 
                $adr = !empty($_POST['address'])?$_POST['address']:''; 
                $city = !empty($_POST['city'])?$_POST['city']:''; 
                $zip = !empty($_POST['zip'])?$_POST['zip']:''; 
                $cname = !empty($_POST['cardname'])?$_POST['cardname']:''; 
                $ccnum = !empty($_POST['cardnumber'])?$_POST['cardnumber']:'';
                $expmonth = !empty($_POST['expmonth'])?$_POST['expmonth']:''; 
                $expyear = !empty($_POST['expyear'])?$_POST['expyear']:'';
                $cvv = !empty($_POST['cvv'])?$_POST['cvv']:''; 
                $user_id = $_SESSION['user_id'];

                foreach ($_SESSION["cart_item"] as $item)
                {
                    $productName = $item['name'];
                    $quantity = $item['quantity'];
                    $price = $item['price'];
                }
                    
                //Insert order into DB
                require ("dbcon2.php");
                $dbCon2 = dbCon2();
                $query = $dbCon2->prepare("INSERT INTO orders (`user_id`, `fullname`, `orderEmail`, `shipping_address`, `city`, `zip`, `cname`, `ccnum`, `expmonth`, `expyear`, `cvv`, `productname`, `quantity`, `price`)
                VALUES ('$user_id', '$fname', '$email', '$adr',  '$city', '$zip', '$cname', '$ccnum', '$expmonth', '$expyear', '$cvv', '$productName', '$quantity', '$price')");
                $query->execute();

                    // Send email invoice to the user
                    $to = 'andreas.madum1@gmail.com'; 
                    $subject = 'Order confirmation'; 
                    $htmlContent = " 
                        <h1>Order details</h1> 
                        <p><b>Full Name: </b>".$fname."</p> 
                        <p><b>Email: </b>".$email."</p> 
                        <p><b>City: </b>".$adr."</p>
                        <p><b>Zip: </b>".$zip."</p> 
                        <p><b>Name on Card: </b>".$cname."</p> 
                        <p><b>Card Number: </b>".$ccnum."</p>
                        <p><b>Product: </b>".$productname."</p>
                        <p><b>Quantity: </b>".$quantity."</p>
                        <p><b>Price: </b>".$price."</p>
                    "; 
                    
                    // Always set content-type when sending HTML email 
                    $headers = "MIME-Version: 1.0" . "\r\n"; 
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
                    // More headers 
                    $headers .= 'From:'.$fname.' <'.$email.'>' . "\r\n"; 
                    
                    // Send email 
                    @mail($to,$subject,$htmlContent,$headers); 
                    
                    $status = 'success'; 
                    $statusMsg = 'Your order has been created.'; 
                    $postData = '';
                    
                    redirect_to("/orders");
                }
                else
                { 
                    $statusMsg = 'Robot verification failed, please try again.'; 
                    echo $statusMsg;
                    redirect_to("/checkout");
                } 
            }
            else
            { 
                $statusMsg = 'Please check on the reCAPTCHA box.'; 
                echo $statusMsg;
                redirect_to("/checkout");
            } 
        }
        else
        { 
            $statusMsg = 'Please fill in all the mandatory fields.'; 
            echo $statusMsg;
            redirect_to("/checkout");
        } 
}


?>