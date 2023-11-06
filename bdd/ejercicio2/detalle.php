<?php
include "conexion2.php";

if (isset($_GET["id"]) && is_numeric($_GET["id"])) 
{
    $id = $_GET["id"];
    $consulta = "SELECT * FROM empleados WHERE id = $id";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) 
    {
        $fila = $resultado->fetch_assoc();
        echo "<h2>Detalle del Empleado</h2>";
        echo "<p>ID: " . $fila["id"] . "</p>";
        echo "<p>Nombre: " . $fila["Nombre"] . "</p>";
        echo "<p>Apellido: " . $fila["Apellido"] . "</p>";
        echo "<p>Puesto: " . $fila["Puesto"] . "</p>";
    }
    else
    {
        echo "Empleado no encontrado";
    }
}
else
{
    echo "ID inválido";
}
?>
