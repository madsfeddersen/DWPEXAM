<?php
    include ("business/session.php");
    
    include ("business/router.php");
    if(!isset($_SESSION))
      {
        session_start();
      }
	include ("templates/header.php");
?>
<body id="container">
<?php
    include ("templates/navigation.php");
    
    // Gets URI
    $request = $_SERVER['REQUEST_URI'];

    // Instantiate Router and parse URI to router
    $router = new Router($request);
    
    // Routes

    // Landing page
    $router->get('/', 'presentation/views/home');

    // Views
    $router->get('home', 'presentation/views/home');
    $router->get('shop', 'presentation/views/shop');
    $router->get('login', 'presentation/views/login');
    $router->get('logout', 'presentation/views/logout');
    $router->get('signup', 'presentation/views/signup');
    $router->get('about', 'presentation/views/about');
    $router->get('faq', 'presentation/views/faq');
    $router->get('contact', 'presentation/views/contact');
    $router->get('product', 'presentation/views/product');
    $router->get('cart', 'business/cart/cart');
    $router->get('checkout', 'presentation/views/checkout');
    $router->get('profile', 'presentation/views/profile');
    $router->get('orders', 'presentation/views/orders');
    $router->get('userDashboard', 'presentation/views/userDashboard');

    // Backend views
    $router->get('dashboard', 'presentation/backend/dashboard');
    $router->get('editUsers', 'persistence/userDAO/manageUsers');
    $router->get('siteDash', 'presentation/backend/siteDash');
    $router->get('manageSite', 'persistence/siteDAO/manageSite');
    $router->get('editProducts', 'presentation/backend/editProducts');
    $router->get('editOrders', 'persistence/orderDAO/manageOrders');

    // Logic routes
    $router->get('handleCheckout', 'business/handleCheckout');
  
    include ("templates/scripts.php");    
    include ("templates/footer.php");
?>
</body>










    
