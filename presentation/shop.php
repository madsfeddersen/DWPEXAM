<?php
require_once (__DIR__ . "/../business/productDAO.php");
?>

<div id="app">
    <v-app id="baggrund">
        <v-container grid-list-xl fluid text-xs-center>
            <h4 class="page-sub-title">
                Behold our selection of ducks!
            </h4>
            <v-layout ma-5 row wrap>    
                <?php
                    displayProducts();
                ?>
            </v-layout>
        </v-container>
    </v-app>
</div>
