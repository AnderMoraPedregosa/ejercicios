<?php

if(isset($_GET["texto"]))
{
    setcookie("usuario",$_GET["texto"],time()+ 7*24*60*60);
}

if (isset($_COOKIE["usuario"])) 
{
    $usuario = $_COOKIE["usuario"];
}

if (isset($_GET["accion"]) && $_GET["accion"] == 'borrarCookie') 
{
    setcookie("usuario", ' ', -1);
}
require "ejercicio2Vista.php";