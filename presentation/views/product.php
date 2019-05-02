<?php
require_once (__DIR__ . "/../../persistence/productDAO.php");

?>


<div id="app">
    <v-app>
        <v-container>
            <div class="page-sub-title" style="font-family: Montserrat;">
            <h1>Product details</h1>
            </div>
            <v-layout>    
                <?php
                $productID = $args[0];
                    readProduct($productID);
                ?>
            </v-layout>
            
        </v-container>
    </v-app>
</div>