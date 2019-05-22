<?php
require_once (__DIR__ . "/../../business/dbcon.php");
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $code = $_POST['code'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $dbCon = dbCon();
    $query = $dbCon->prepare("INSERT INTO products (`name`, `code`, `price`, `description`) VALUES ('$name', '$code', '$price', '$description')");
    $query->execute();
    
    header("Location: manageProducts.php?status=added");
}

else
    {
        header('Location: ' . __DIR__ . 'persistence/productDAO/manageProducts.php?status=0');
    }
?>

