<?php
    
    include (__DIR__ . "/header.php");
    include ("business/router.php");
    //include ("business/session.php");
?>
<body>
<?php
    include (__DIR__ . "/navigation.php");


    // Gets URI
    $request = $_SERVER['REQUEST_URI'];

    // Instantiate Router and parse URI to router
    $router = new Router($request);
    

    // Routes
    $router->get('/', 'presentation/views/shop');
    $router->get('home', 'presentation/views/home');
    $router->get('shop', 'presentation/views/shop');
    $router->get('login', 'presentation/views/login');
    $router->get('cart', 'presentation/views/cart');
    $router->get('signup', 'presentation/views/signup');
    $router->get('about', 'presentation/views/about');
    $router->get('faq', 'presentation/views/faq');
    $router->get('contact', 'presentation/views/contact');
    $router->get('product', 'presentation/views/product');
    $router->get('backend', 'presentation/backend/backend');

    include (__DIR__ . "/footer.php");
    include (__DIR__ . "/scripts.php");    
?>
</body>








    
