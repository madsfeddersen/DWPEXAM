<?php
// This is the master file in which our "template" is structured.

    include ("business/router.php");
    include (__DIR__ . "/header.php");


?>

<body>

    <?php
        include (__DIR__ . "/navigation.php");

        // Router - it is placed in the middle of the includes, in order to get the content before the footer.
        $request = $_SERVER['REQUEST_URI'];
        $router = new Router($request);
        $router->get('/', 'presentation/home');
        $router->get('home', 'presentation/home');
        $router->get('shop', 'presentation/shop');
        $router->get('product', 'presentation/productPage');
        $router->get('login', 'presentation/login');
        $router->get('signUp', 'presentation/signUp');
        $router->get('about', 'presentation/about');
        $router->get('faq', 'presentation/faq');
        $router->get('contact', 'presentation/contact');

        include (__DIR__ . "/footer.php");
        include (__DIR__ . "/scripts.php");    
    ?>
   
</body>









    
