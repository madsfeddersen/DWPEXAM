<?php
include ("business/router.php");
include (__DIR__ . "/header.php");
?>
<body>

    <?php
    include (__DIR__ . "/navigation.php");
    
    $request = $_SERVER['REQUEST_URI'];
    $router = new Router($request);

    $router->get('/', 'presentation/shop');
    $router->get('home', 'presentation/home');
    $router->get('shop', 'presentation/shop');
    $router->get('about', 'presentation/about');
    $router->get('faq', 'presentation/faq');
    $router->get('contact', 'presentation/contact');

    /*include (__DIR__ . "/shop.php");*/
    include (__DIR__ . "/footer.php");
    include (__DIR__ . "/scripts.php");
    ?>
    <!--/*
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
    <script>
        new Vue({ el: '#app' })
    </script>
    */-->
</body>









    
