<?php         
    function duck()
    {
        //DUMMY DATA
        $ducks =
            [
                ["name" => "Mermaid Duck", "price" => "32.95", "id" => "MermaidDuck"],
                ["name" => "Arnold Duck", "price" => "12.00", "id" => "MuscleDuck"],
                ["name" => "Sunglasses Duck", "price" => "10.00", "id" => "SunglassesDuck"],
                ["name" => "Donald Trump Duck", "price" => "32.00", "id" => "TrumpDuck"],
                ["name" => "Turtle Duck", "price" => "5.00", "id" => "TurtleDuck"],
                ["name" => "Bat Duck", "price" => "25.00", "id" => "BatDuck"],
                ["name" => "Female Duck", "price" => "47.00", "id" => "FemaleDuck"],
                ["name" => "Ninja Duck", "price" => "25.00", "id" => "NinjaDuck"],
                ["name" => "Standard Duck", "price" => "10.00", "id" => "StandardDuck"]
            ];
        foreach ($ducks as $duck)
        {
            $getDuckImgId = 'img/' . $duck['id'] . '.png';
            $duckImg = '<v-img class="duckImg" src="' . $getDuckImgId . '"></v-img>';
            $b = "<br>";
            $duckInfo = $duck['name'] . $b . $duck['price'] . ' USD$';
            $duckString = '<v-flex xs3><v-card>' . $duckImg . '<v-card-text class="px-0" style="font-family: Arial, regular">' . $duckInfo . '</v-card-text></v-card></v-flex>';
            echo $duckString;
        }
    }
?>
<html>
<head>
    <link rel="stylesheet" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
</head>
<body>

<header class="header-user-dropdown">

	<div class="header-limiter">
		<h1><a href="#">Duck <span>You!</span></a></h1>
        
		<nav>
			<a href="#">Shop</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
		</nav>

</header>
<div id="app">
    <v-app light>
        <v-container  grid-list-md text-xs-center>
            <v-layout mt-5 row wrap>
                <?php duck(); ?>
            </v-layout>
        </v-container>
    </v-app>
</div>


<footer class="footer-distributed">

<div class="footer-right">

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-github"></i></a>

</div>

<div class="footer-left">

    <p class="footer-links">
        <a href="#">Home</a>
        ·
        <a href="#">Blog</a>
        ·
        <a href="#">Pricing</a>
        ·
        <a href="#">About</a>
        ·
        <a href="#">Faq</a>
        ·
        <a href="#">Contact</a>
    </p>
    <p class="footer-text" style="font-style: italic"> We are your number one stop for rubber ducks.</p> 
    <br>
    <p class="footer-text" style="font-style: italic"> We’ve got all shapes, colors and sizes of duck
     that you could possibly think of! </p>
    <br>
    <p class="footer-text" style="font-style: italic">Perfect for your bath time needs! 
    </p>
    <br>
    <p class="footer-text" style="font-style: italic">Our ducks are sure to make you go quackers!</p>
    <br>
    <p class="footer-text" style="font-style: italic">Treat yourself, you ducking duck!</p>
    <br>
    <p>Duck You! &copy; 2019</p>
</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
    <script>
        new Vue({ el: '#app' })
    </script>
</body>
</html>
