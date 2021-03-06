<!-- Status message -->
<?php 
require_once(__DIR__ . "/../../business/handleContact.php");




echo "<br>" . $status . "<br>";
echo $statusMsg;

if(!empty($statusMsg)){ ?>
    <h1 class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></h1>
<?php } ?>



<h1>
<?php

?>
</h1>


<form action="/../../business/handleContact.php" method="post">
    <!-- Form fields -->
    <div class="input-group">
        <input type="text" name="name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" placeholder="Your name" required="" />
    </div>
    <div class="input-group">	
        <input type="email" name="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="Your email" required="" />
    </div>
    <div class="input-group">
        <textarea name="message" placeholder="Your message..." required="" ><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
    </div>
		
    <!-- Google reCAPTCHA box -->
    <div class="g-recaptcha" data-sitekey="6LchXaEUAAAAAID5UnKUmw3LJqVA9fmo1vWM8TVO"></div>
    
    <!-- Submit button -->
    <input id="submit" type="submit" name="submit" value="Send">
</form>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

