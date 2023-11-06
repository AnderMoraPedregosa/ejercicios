<?php



function inicializarCesta(){
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
        case "insertar":
            if(isset($_GET["idProducto"])) 
            {
                $idProductoComprado = $_GET["idProducto"];
                array_push($_SESSION["productosCesta"], $idProductoComprado);
            }
            break;
        case "comprar":
            unset($_SESSION["productosCesta"]);
            break;
        case "detalle":
            $id = $_GET["idProducto"];
       
            
            require_once 'ejercicio89Datos.php';
         
            
            $nombre = $productos[$id]["nombre"];
            $descripcion = $productos[$id]["descripción"];
            $precio = $productos[$id]["precio"];

            require "ejercicio89DetallesVista.php";
            die();
    }
}


session_start();


inicializarCesta();


if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion($accion);
}



require_once 'ejercicio89Datos.php';

if(isset($_SESSION["productosCesta"])) 
{

    
    $productosComprados = $_SESSION["productosCesta"];
    $precioTotal = calcularPrecioTotal($productosComprados, $productos);
}



require "ejercicio89Vista.php";