<?php
    include ("business/session.php");
    include ("templates/header.php");
    include ("business/router.php");
?>
<body>
<?php
    include ("templates/navigation.php");

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
    $router->get('dashboard', 'presentation/backend/dashboard');
    $router->get('editUsers', 'persistence/userDAO/manageUsers');
    $router->get('editSite', 'presentation/backend/editSite');
    $router->get('editProducts', 'presentation/backend/editProducts');
    
    include ("templates/footer.php");
    include ("templates/scripts.php");    
?>
</body>








    
