<?php

// Cargar los archivos necesarios
require_once 'baseDeDatos/database.php';
require_once 'baseDeDatos/bodegasDB.php';
require_once 'baseDeDatos/vinosDB.php';


function realizarAccion($accion) 
{
    switch ($accion) 
    {
        case 'bodega_detalle':
            $id = $_GET["id"];
            verDetalleBodega($id); // Ejemplo de una mayor separación de lógica
            break;
        case 'bodega_crear':
            require "vista/bodegas/crearVista.php";
            die();
        case 'bodega_insertar':
            $bodega = array(
                "nombre" => $_GET["nombre"],
                "direccion" => $_GET["direccion"],
                "email" => $_GET["email"],
                "telefono" => $_GET["telefono"],
                "contacto" => $_GET["contacto"],
                "fundacion" => $_GET["fundacion"],
                "hotel" => isset($_GET["hotel"]) ? $_GET["hotel"] : 0,
                "restaurante" => isset($_GET["restaurante"]) ? $_GET["restaurante"] : 0
            );
            insertBodega($bodega);
            break;
        case 'bodega_actualizar':
            $bodega = array(
                "id" => $_GET["id"],
                "nombre" => $_GET["nombre"],
                "direccion" => $_GET["direccion"],
                "email" => $_GET["email"],
                "telefono" => $_GET["telefono"],
                "contacto" => $_GET["contacto"],
                "fundacion" => $_GET["fundacion"],
                "hotel" => isset($_GET["hotel"]) ? $_GET["hotel"] : 0, // Si no recibe valor, poner 0
                "restaurante" => isset($_GET["restaurante"]) ? $_GET["restaurante"] : 0, // Si no recibe valor, poner 0
            );
            updateBodega($bodega);
            break;
        case 'bodega_eliminar':
            $id = $_GET["id"];
            deleteAllVinosByBodega($id);
            deleteBodegaById($id);
            break;
        case 'vino_crear':
            $bodega = $_GET["bodega"];
            require "vista/vinos/crearVista.php";
            die();
        case 'vino_insertar':
            $vino = array(
                "nombre" => $_GET["nombre"],
                "bodega" => $_GET["bodega"],
                "descripcion" => $_GET["descripcion"],
                "ano" => $_GET["ano"],
                "tipo" => $_GET["tipo"],
                "alcohol" => $_GET["alcohol"]
            );
            insertVino($vino);
            header("Location: index.php?accion=bodega_detalle&id=".$_GET["bodega"]);
            // Alternativa: verDetalleBodega($_GET["bodega"])
            break;
        case 'vino_detalle':
            $id = $_GET["id"];
            $vino = getVinoById($id);
            $bodega = $_GET["bodega"];
            require "vista/vinos/detallesVista.php";
            die();
        case 'vino_eliminar':
            $id = $_GET["id"];
            deleteVinoById($id);
            header("Location: index.php?accion=bodega_detalle&id=".$_GET["bodega"]);
            // Alternativa: verDetalleBodega($_GET["bodega"])
            break;
    }
}

function verDetalleBodega($id) {
    $bodega = getBodegaById($id);
    $vinos = getAllByBodega($id);
    require "vista/bodegas/detallesVista.php";
    die();
}

// Todas las acciones requerirán de conexión con la BD:
$db = connect();

// Comprobamos si el usuario a realizado alguna acción:
if(isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    realizarAccion($accion);
}

// Si no se ha cargado una vista en el paso anterior, cargamos la vista de las bodegas:
$bodegas = getBodegas();
require "vista/bodegas/indexVista.php";


