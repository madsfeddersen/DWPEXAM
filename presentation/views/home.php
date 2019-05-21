<?php
    require_once (__DIR__ . "/../../persistence/siteDAO/readSite.php");
    require_once (__DIR__ . "/../../persistence/productDAO.php");
?>

<head>
    <link rel="stylesheet" href="/presentation/css/home.css">
</head>
<br>
<h1 class="page-title">News</h1>
<h4 class="content"><?php echo $getInfo[0][8];?></h4>
<br>
<br>
<h1 class="page-title">Who are we?</h1>
<h4><?php echo $getInfo[0][9];?></h4>
<br>
<br>
<div id="app">
    <v-app id="baggrund">
        <v-container grid-list-xl fluid text-xs-center>
            <div class="page-sub-title">
                <h2> Below you will see our duck of the day!</h2> 
                <br> 
                <h4> Carefuly selected by our system administrator, Steve. </h4>
            </div>
            <v-layout ma-5 row wrap>
                <?php
                    $duckOfDay = $getInfo[0][7];
                    readProduct($duckOfDay);
                ?>
            </v-layout>
        </v-container>
    </v-app>
</div>

