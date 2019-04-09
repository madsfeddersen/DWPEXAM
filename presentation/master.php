<?php
// This is the master file in which our "template" is structured.

    include ("business/router.php");
    include (__DIR__ . "/header.php");


?>

<body>

    <?php
        include (__DIR__ . "/navigation.php");

/*Router - it is placed in the middle of the includes in this file, -
in order to get the content and display it before the footer and script.*/

        $request = $_SERVER['REQUEST_URI'];
        $router = new Router($request);
        $router->get('/', 'presentation/shop');
        $router->get('home', 'presentation/home');
        $router->get('shop', 'presentation/shop');
        $router->get('login', 'presentation/login');
        $router->get('signUp', 'presentation/signUp');
        $router->get('about', 'presentation/about');
        $router->get('faq', 'presentation/faq');
        $router->get('contact', 'presentation/contact');
        $router->get('product/', 'presentation/product');
       
        include (__DIR__ . "/footer.php");
        include (__DIR__ . "/scripts.php");    
    ?>
   
</body>








    
