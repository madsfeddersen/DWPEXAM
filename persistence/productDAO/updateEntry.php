<?php
require_once (__DIR__ . "/../../business/dbcon.php");
if (isset($_POST['entryID']) && isset($_POST['submit']))
{
    $entryID = $_POST['entryID'];

    $name = $_POST['name'];
    $code = $_POST['code'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    
    $dbCon = dbCon($user, $pass);
    $query = $dbCon->prepare("UPDATE products SET 'name'='$name', code='$code', price='$price', description='$description' WHERE id = $entryID");
    $query->execute();
    var_dump($query);
    header("Location: manageProducts.php?status=updated&ID=$entryID");
}
else
{
    header("Location: manageProducts.php?status=0");
}


