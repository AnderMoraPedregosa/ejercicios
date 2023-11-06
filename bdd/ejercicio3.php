<?php

include "conexion.php";


$consulta = "SELECT * FROM alumnos";
$resultado = $conexion->query($consulta);



if ($resultado->num_rows > 0) 
{
    echo "<h2>Lista de Alumnos:</h2>";
    echo "<ul>";
    while ($fila = $resultado->fetch_assoc()) 
    {
        echo "<li>ID: " . $fila["Id"]. ", Nombre: " . $fila["Nombre"]. ", Apellidos: " . $fila["Apellidos"]. ", Email: " . $fila["Email"]. ", Edad: " . $fila["Edad"]. "</li>";
    }
    echo "</ul>";
} else {
    echo "No se encontraron resultados.";
}

// Cierra la conexión
$conexion->close();
?>
