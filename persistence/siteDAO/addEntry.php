<?php
require_once (__DIR__ . "/../../business/dbcon.php");
if (isset($_POST['submit'])) {

    $shop_name = $_POST['shop_name'];
    $street_address = $_POST['street_address'];
    $zipcode = $_POST['zipcode'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $opening_hours = $_POST['opening_hours'];
    $daily_product = $_POST['daily_product'];
    $news = $_POST['news'];

$dbCon = dbCon($user, $pass);
$query = $dbCon->prepare("INSERT INTO duck_shop (`shop_name`, `street_address`, `zipcode`, `phone`, `email`, `opening_hours`, `daily_product`, `news`) VALUES ('$shop_name', '$street_address', '$zipcode', '$phone',  '$email', '$opening_hours', '$daily_product', '$news')");
$query->execute();
    header("Location: manageSite.php?status=added");
}

else
    {
        header('Location: ' . __DIR__ . 'persistence/siteDAO/manageSite.php?status=0');
    }
?>