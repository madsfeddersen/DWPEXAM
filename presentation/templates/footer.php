<?php
require (__DIR__ . "/../../persistence/siteDAO/readSite.php");
?>

<head>
    <style>
    #footer {
        position: relative;
    }
    </style>
</head>

<footer id="footer" class="footer-distributed">
    <div class="footer-right">
        <a href="https://www.facebook.com/KimThoeisen" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.linkedin.com/in/kim-th%C3%B8isen/" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://github.com/madsfeddersen/DWPEXAM" target="_blank"><i class="fab fa-github"></i></a>
    </div>
    <div class="footer-left">
        <p class="footer-links">
            <a href="/home">Home</a> |
            <a href="/shop">Shop</a> |
            <a href="/about">About us</a> |
            <a href="/faq">FAQ</a> |
            <a href="/contact">Contact</a>
        </p>      
        <div class="footer-left">
            <p class="footer-text">
                <?php echo 'Email: ' . $getInfo[0][5];?>
            </p> 
        </div>            
        <div class="footer-left">
            <p class="footer-text">
                <?php echo 'Phone: ' . $getInfo[0][4];?>
            </p> 
        </div>
        <div class="footer-left">
            <p class="footer-text">
                <?php echo 'Address: ' . $getInfo[0][2] . ' ' . $getInfo[0][3];?>
            </p> 
        </div>
        <div class="footer-left">
            <p class="footer-text">
                <?php echo 'Open hours: ' . $getInfo[0][6];?>
            </p> 
        </div>
        <p class="copyright">
            Duck You! &copy;2019
        </p>
    </div>
</footer>


   