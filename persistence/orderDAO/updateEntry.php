<?php
require_once (__DIR__ . "/../../business/dbcon.php");
if (isset($_POST['entryID']) && isset($_POST['submit']))
{
    $entryID = $_POST['entryID'];

    
    $shipping_address = $_POST['shipping_adress'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    
    
    $dbCon = dbCon($user, $pass);
    $query = $dbCon->prepare("UPDATE orders SET shipping_adress='$shipping_address', city='$city', zip='$zip' WHERE id = $entryID");
    $query->execute();

    header("Location: manageOrders.php?status=updated&ID=$entryID");
}
else
{
    header("Location: manageOrders.php?status=0");
}


