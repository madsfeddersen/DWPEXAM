<?php
require_once (__DIR__ . "/../../persistence/productDAO.php");
?>

<head>
    <style>
    #footer {
        position: relative;
    }
    </style>
</head>

<div id="app">
    <v-app id="baggrund">
        <v-container grid-list-xl fluid text-xs-center>
            <div class="page-sub-title" style="font-family: Montserrat;">
                Behold our selection of ducks!
            </div>
            <v-layout ma-5 row wrap>    
                <?php
                    readShop();
                ?>
            </v-layout>
        </v-container>
    </v-app>
</div>

