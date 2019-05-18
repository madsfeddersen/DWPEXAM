<?php
    require_once (__DIR__ . "/../../persistence/siteDAO/readSite.php");
    require_once (__DIR__ . "/../../persistence/productDAO.php");
?>
<br>
<h1 class="page-title">News</h1>
<h4><?php echo $getInfo[0][8];?></h4>
<br>
<br>
<h1 class="page-title">Who are we?</h1>
<h4><?php echo $getInfo[0][9];?></h4>
<br>
<br>
<div id="app">
    <v-app id="baggrund">
        <v-container grid-list-xl fluid text-xs-center>
            <div class="page-sub-title" style="font-family: Montserrat;">
                Behold our selection of ducks!
            </div>
            <v-layout ma-5 row wrap>
                <?php readProduct(2);?>
            </v-layout>
        </v-container>
    </v-app>
</div>