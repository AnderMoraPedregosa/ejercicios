<?php
include "conexion1.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $eliminacion = "DELETE FROM productos WHERE id=$id";

    if ($conexion->query($eliminacion) === TRUE) {
        header("Location: ejercicio1.php"); 
        exit();
    } else {
        echo "Error al eliminar el producto: " . $conexion->error;
    }
}
?>
