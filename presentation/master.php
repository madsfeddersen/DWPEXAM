<?php
include (__DIR__ . "/header.php");
?>

<body>

    <?php
    include (__DIR__ . "/navigation.php");
    include (__DIR__ . "/products.php");
    include (__DIR__ . "/footer.php");
    include (__DIR__ . "/scripts.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
    <script>
        new Vue({ el: '#app' })
    </script>
</body>









    
