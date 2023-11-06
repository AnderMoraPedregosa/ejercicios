<?php

include "conexion2.php";

if ($_SERVER["REQUEST_METHOD"]== "POST") 
{
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $puesto = $_POST["Puesto"];

        // Mostrar los valores recibidos del formulario
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellido: " . $apellido . "<br>";
        echo "Puesto: " . $puesto . "<br>";
    
    $inserccion = "INSERT INTO empleados (Nombre,Apellido,Puesto)
                    values ('$nombre','$apellido','$puesto')";
    
    if ($conexion->query($inserccion)== TRUE) 
    {
        header("location:ejercicio2.php");
        exit();
    }
    else
    {
        echo "error al agregar empleado: " . $conexion->error;
    }
}
?>