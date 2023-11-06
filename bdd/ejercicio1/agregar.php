<?php
include "conexion1.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $insercion = "INSERT INTO productos (nombre) VALUES ('$nombre')";

    if ($conexion->query($insercion) === TRUE) {
        header("Location: ejercicio1.php"); 
        exit();
    } else {
        echo "Error al agregar el producto: " . $conexion->error;
    }
}
?>
