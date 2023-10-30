<?php

if (isset($_GET["idioma"]))
{
    setcookie("idioma",$_GET["idioma"],time()+60);
}
if (isset($_COOKIE["idioma"])) 
{
    $idioma = $_COOKIE["idioma"];
}
require "ejercicio3Vista.php";