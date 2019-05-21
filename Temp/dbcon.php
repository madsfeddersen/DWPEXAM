<?php

function dbCon()
{
    $user = "madum_eu";
    $pass = "teacherpassword";
    try {
        $dbCon = new PDO('mysql:host=mysql70.unoeuro.com;dbname=madum_eu_db;charset=utf8', $user, $pass);
        //$dbCon = null;
        return $dbCon;
    } catch (PDOException $err) {
        echo "Error!: " . $err->getMessage() . "<br/>";
        die();
    }
}

