<?php
    
    include (__DIR__ . "/header.php");
    include ("business/router.php");
    include ("business/session.php");
?>
<body>
<?php
    include (__DIR__ . "/navigation.php");


    // Gets URI
    $request = $_SERVER['REQUEST_URI'];

    // Instantiate Router and parse URI to router
    $router = new Router($request);
    

    // Routes
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








    
