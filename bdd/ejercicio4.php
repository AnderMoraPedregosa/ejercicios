<?php
include "conexion.php";

// Datos del nuevo alumno
$nombre = "Nuevo";
$apellidos = "Alumno";
$email = "nuevo@correo.com";
$edad = 25;

// Query para insertar un nuevo registro
$insercion = "INSERT INTO alumnos (Nombre, Apellidos, Email, Edad) VALUES ('$nombre', '$apellidos', '$email', $edad)";

if ($conexion->query($insercion) === TRUE) {
    echo "Nuevo registro insertado correctamente.";
} else {
    echo "Error al insertar el registro: " . $conexion->error;
}

// Cierra la conexión
$conexion->close();
?>
