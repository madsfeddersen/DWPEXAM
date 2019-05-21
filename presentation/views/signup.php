<?php 
require_once(__DIR__ . "/../../persistence/userDAO/createUser.php");
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/presentation/css/dashboard.css">     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>


    <br>
    <h1 class="page-title page-title-register" >
        Register
    </h1>
    <h4 class="page-title page-sub-title-register">
        Already registered? Click <a href="/login">here</a> to login.
    </h4>
    <br>

    <div class="container">

   
    
    <div class="row">    
        <h3>Fill out the form below to sign up:</h3>
        <form class="col s12" name="contact" method="post" action="/../../persistence/userDAO/createUser.php">
             <div class="row">
                <div class="input-field col s12">
                    <input id="userEmail" name="userEmail" type="email" class="validate" required="" aria-required="true">
                    <label for="userEmail">E-Mail</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="userPass" name="userPass" type="password" class="validate" required="" aria-required="true">
                    <label for="userPass">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="firstName" name="firstName" type="text" class="validate" required="" aria-required="true">
                    <label for="firstName">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="lastName" name="lastName" type="text" class="validate" required="" aria-required="true">
                    <label for="lastName">Last Name</label>
                </div>
            </div>
            
            <!-- Google reCAPTCHA box -->
            <div class="g-recaptcha" data-sitekey="6LchXaEUAAAAAID5UnKUmw3LJqVA9fmo1vWM8TVO"></div>

            <button class="btn dashboard" type="submit" name="submit">
                Sign up
            </button>
        </form>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

