<?php
require_once (__DIR__ . "/../business/productDAO.php");
?>

<div id="app">
    <v-app id="baggrund">
        <v-container grid-list-xl fluid text-xs-center>

            <br>
            <h1 class="page-title">
                Behold our selection of ducks!
            </h1>
            <h4 class="page-sub-title">
                Behold our selection of ducks!
            </h4>
            <br>
            <p class="page-text">
                 Behold our selection of ducks!
            </p>
            <v-layout ma-5 row wrap>    
                <?php
                    displayProducts();
                ?>
            </v-layout>
        </v-container>
    </v-app>
</div>
