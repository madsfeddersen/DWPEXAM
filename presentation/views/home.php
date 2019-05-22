<?php
    require_once (__DIR__ . "/../../persistence/siteDAO/readSite.php");
    require_once (__DIR__ . "/../../persistence/productDAO.php");
?>

<head>
    <link rel="stylesheet" href="/presentation/css/home.css">
</head>

<div id="container">
<h1 class="page-title">News</h1>
<h4 class="content news"><?php echo $getInfo[0][8];?></h4>
<hr>
<h1 class="page-title">Who are we?</h1>
<h4 class="content desciption"><?php echo $getInfo[0][9];?></h4>
<hr>
    <div id="app">
        <v-app id="baggrund">
            <v-container grid-list-xl fluid text-xs-center>
                <div class="page-sub-title">
                    <h2> Below you will see our duck of the day!</h2> 
                    <h4> Carefuly selected by our system administrator, Steve McQuackings. </h4>
                </div>
                <v-layout ma-5 row wrap>
                    <?php
                        $duckOfDay = $getInfo[0][7];
                        readProductFrontpage($duckOfDay);
                    ?>
                </v-layout>
            </v-container>
        </v-app>
    </div>
</div>

