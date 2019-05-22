<?php
function dbConFooter()
{
    $user = "root";
    $pass = "";
    try {
        $dbCon = new PDO('mysql:host=localhost;dbname=duckshopdb;charset=utf8', $user, $pass);
        //$dbCon = null;
        return $dbCon;
    } catch (PDOException $err) {
        echo "Error!: " . $err->getMessage() . "<br/>";
        die();
    }
}

