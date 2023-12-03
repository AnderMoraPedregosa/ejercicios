<?php

function connect()
{
    $dbname = "bodegas";
    $host = "localhost";
    $user = "root";
    $pass = "";


        # MySQL
        $db= new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;

}