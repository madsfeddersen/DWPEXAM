<?php
require_once ("business/productDAO.php");

?>


<div id="app">
    <v-app id="baggrund">
        <v-container>
            <div class="page-sub-title" style="font-family: Montserrat;">
            <h1>Product details</h1>
            </div>
            <v-layout>    
                <?php
                $productID = $args[0];
                    displayProductDetails($productID);
                ?>
            </v-layout>
        </v-container>
    </v-app>
</div>