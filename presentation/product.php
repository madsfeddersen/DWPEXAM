<?php
require_once (__DIR__ . "/../business/productDAO.php");

echo "<h1>ProductPage</h1>";

$productID = $args[0];

displayProductDetails($productID);

?>

<div id="app">

</div>
