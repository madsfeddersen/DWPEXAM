<html>
<head>
    <link rel="stylesheet" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
</head>
<body>
<div id="app">

    <v-container grid-list-md text-xs-center>
        <v-layout row wrap>
        <v-flex v-for="i in 3" :key="`4${i}`">
            <v-card dark color="secondary">
            <v-card-text class="pa-5 ma-5">

            <?php
        function duckGrid()
        {
            $duckData = [
                ["name" => "Rubber Duck", "price" => "1", "id" => "1"],
                ["name" => "Donald Duck", "price" => "2", "id" => "2"],
                ["name" => "Scrooge McDuck", "price" => "3", "id" => "3"],
                ["name" => "Mermaid Duck", "price" => "32", "id" => "4"],
                ["name" => "Arnold Duck", "price" => "12", "id" => "5"],
                ["name" => "Sunglasses Duck", "price" => "10", "id" => "6"],
                ["name" => "Donald Trump Duck", "price" => "32", "id" => "7"],
                ["name" => "Turtle Duck", "price" => "32", "id" => "8"],
                ["name" => "Bat Duck", "price" => "32", "id" => "9"],
                ["name" => "Female Duck", "price" => "32", "id" => "10"],
                ["name" => "Ninja Duck", "price" => "32", "id" => "11"],
                ["name" => "Standard Duck", "price" => "32", "id" => "12"],
            ];
            $br = "<br>";
            foreach ($duckData as $duck)
            {   

                $getDuckImg = "https://picsum.photos/100/?random";
                $getDuckUrl = $getDuckImg;
                $duckImg = '<a class="duckImgAnchor" href="' . $getDuckUrl .'" target="_blank"><img class="duckImg" src="' . $getDuckImg . '"></a>';
                $duckString = $duckImg . $br . $duck['name'] . ' - ' . $duck['price'] . ' USD'. $br . 'ItemsNumber: ' . $duck['id'] . $br;
                $duckEcho = '<div class="duckContainer">' . $duckString . '</div>';
                echo $duckEcho;
            }
        }

        duckGrid();
        ?>

            </v-card-text>
            </v-card>
        </v-flex>      
        </v-layout>
    </v-container>
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
    <script>
        new Vue({ el: '#app' })
    </script>
</body>

</html>
