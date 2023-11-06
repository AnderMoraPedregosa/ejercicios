<?php

function iniciarCompra()
{
    if(!isset($_SESSION["productosCesta"]))
    {
        $_SESSION["productosCesta"] = array();
    }
}

function calcularPrecioTotal($productosComprados, $catalogoProductos)
{
    $precioTotal = 0;
    foreach ($productosComprados as $idProducto) 
    {
        $precioTotal += $catalogoProductos[$idProducto]['precio'];
    }
    return $precioTotal;
}

function realizarAccion($accion)
{
    switch ($accion) 
    {
        case "añadir":
            if(isset($_GET["idProducto"])) 
            {
                $idProductoComprado = $_GET["idProducto"];
                array_push($_SESSION["productosCesta"], $idProductoComprado);
            }
            break;
        case "comprar":
            unset($_SESSION["productosCesta"]);
            break;
    }
}



require_once 'ejercicio7BaseDeDatos.php';


session_start();
iniciarCompra();

if(isset($_GET["accion"])) 
{
    $accion = $_GET["accion"];
    realizarAccion($accion);
}



if(isset($_SESSION["productosCesta"])) 
{

    $productosComprados = $_SESSION["productosCesta"];
    $precioTotal = calcularPrecioTotal($productosComprados, $productos);

}



require "ejercicio7Vista.php";