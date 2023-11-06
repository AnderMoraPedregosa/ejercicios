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

function guardarFavorito($id){

    
    if(isset($_COOKIE["favoritos"]))
    {
        $favoritos = explode(",",$_COOKIE["favoritos"]); 
        
    } 
    else 
    {
        $favoritos = [];
    }
   
    
    array_push($favoritos, $id);
  
    
    setcookie("favoritos", implode(",",$favoritos), time() + 7*24*60*60); 
    
}

function esFavorito($id){
    if(isset($_COOKIE["favoritos"]))
    {
        $array_favoritos = explode(",",$_COOKIE["favoritos"]);
        return in_array($id, $array_favoritos);
    }
    return false;
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
        case "favorito":
            guardarFavorito($id = $_GET["idProducto"]);
            break;
        case "detalle":
            $id = $_GET["idProducto"];

            
            require_once 'ejercicio10Datos.php';
       
            

            $nombre = $productos[$id]["nombre"];
            $descripcion = $productos[$id]["descripción"];
            $precio = $productos[$id]["precio"];

            require "ejercicio10detallesVista.php";
            die();
    }
}







session_start();




inicializarCesta();


if(isset($_GET["accion"])) 
{
    $accion = $_GET["accion"];
    realizarAccion($accion);
}




require_once 'ejercicio10Datos.php';

if(isset($_SESSION["productosCesta"])) 
{
    $productosComprados = $_SESSION["productosCesta"];
    $precioTotal = calcularPrecioTotal($productosComprados, $productos);
}

require "ejercicio10Vista.php";