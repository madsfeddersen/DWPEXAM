<?php
require_once (__DIR__ . "/../business/productDAO.php");
?>
<div id="app">
    <v-app id="baggrund">
        <v-container grid-list-xl fluid text-xs-center>
            <v-layout ma-5 row wrap>    
                <?php
                    displayProducts();
                ?>
            </v-layout>
        </v-container>
    </v-app>
</div>