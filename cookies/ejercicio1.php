<?php

if(isset($_GET["texto"]))
{
    setcookie("usuario",$_GET["texto"],time()+ 7*24*60*60);
}

if (isset($_COOKIE["usuario"])) 
{
    $usuario = $_COOKIE["usuario"];
}
require "ejercicio1Vista.php";