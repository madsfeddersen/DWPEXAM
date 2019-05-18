<?php
require_once (__DIR__ . "/../../business/dbcon.php");
if (isset($_POST['entryID']) && isset($_POST['submit']))
{
    $entryID = $_POST['entryID'];

    $shop_name = $_POST['shop_name'];
    $street_address = $_POST['street_address'];
    $zipcode = $_POST['zipcode'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $opening_hours = $_POST['opening_hours'];
    $daily_product = $_POST['daily_product'];
    $news = $_POST['news'];
    
    $dbCon = dbCon($user, $pass);
    $query = $dbCon->prepare("UPDATE duck_shop SET shop_name='$shop_name', street_address='$street_address', zipcode='$zipcode', phone='$phone', email='$email', opening_hours='$opening_hours', daily_product='$daily_product', news='$news' WHERE id = $entryID");
    $query->execute();

    header("Location: manageSite.php?status=updated&ID=$entryID");
}
else
{
    header("Location: manageSite.php?status=0");
}


