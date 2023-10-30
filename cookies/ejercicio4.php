<?php

session_start();


function iniciarLista()
{
    if(!isset($_SESSION["listaPersonas"]))
    {
        $_SESSION["listaPersonas"] = array(); 
    }
    return $_SESSION["listaPersonas"];
}

function realizarAccion($accion)
{
    switch ($accion)
    {
        case "insertar":
            if (isset($_GET["persona"])) 
            {
                $nombrePersona = $_GET["persona"];
                iniciarLista();
                array_push($_SESSION["listaPersonas"], $nombrePersona);
            }
            break;
        case "vaciar":
                unset($_SESSION["listaPersonas"]);
            break;

    }
}

if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion($accion);
}
$personas = iniciarLista();
require "ejercicio4Vista.php";