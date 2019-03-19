<?php         
    function duck()
    {
        $ducks =
            [
                ["name" => "Rubber Duck", "price" => "1.00", "id" => "000001"],
                ["name" => "Donald Duck", "price" => "2.00", "id" => "000002"],
                ["name" => "Scrooge McDuck", "price" => "3.00", "id" => "000003"],
                ["name" => "Mermaid Duck", "price" => "32.95", "id" => "000004"],
                ["name" => "Arnold Duck", "price" => "12.00", "id" => "000005"],
                ["name" => "Sunglasses Duck", "price" => "10.00", "id" => "000006"],
                ["name" => "Donald Trump Duck", "price" => "32.00", "id" => "000007"],
                ["name" => "Turtle Duck", "price" => "32.00", "id" => "000008"],
                ["name" => "Bat Duck", "price" => "32.00", "id" => "000009"],
                ["name" => "Female Duck", "price" => "32.00", "id" => "000010"],
                ["name" => "Ninja Duck", "price" => "32.00", "id" => "000011"],
                ["name" => "Standard Duck", "price" => "32.00", "id" => "000012"],
            ];
        foreach ($ducks as $duck)
        {
            $getDuckImgId = 'img/' . $duck['id'] . '.jpg';
            $duckImg = '<v-img class="duckImg" src="' . $getDuckImgId . '"></v-img>';
            $b = "<br>";
            $duckInfo = $duck['name'] . $b . $duck['price'] . ' USD$';
            $duckString = '<v-flex xs3><v-card>' . $duckImg . '<v-card-text class="px-0">' . $duckInfo . '</v-card-text></v-card></v-flex>';
            echo $duckString;
        }
    }
?>
<html>
<head>
    <link rel="stylesheet" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <v-app dark>
        <v-container  grid-list-md text-xs-center>
            <v-layout mt-5 row wrap>
                <?php duck(); ?>
            </v-layout>
        </v-container>
    </v-app>
</div>



    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
    <script>
        new Vue({ el: '#app' })
    </script>
</body>
</html>
