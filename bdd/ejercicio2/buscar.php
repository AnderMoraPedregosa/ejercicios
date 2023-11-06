<?php
include "conexion2.php";

if (isset($_GET["nombre"])) 
{
    $nombre = $_GET["nombre"];

    if (!empty($nombre)) 
    {
        $consulta = "SELECT * FROM empleados WHERE Nombre='$nombre'";
    } else 
    {
       
        $consulta = "SELECT * FROM empleados";
    }

    $resultado = $conexion->query($consulta);

    echo "<h2>Resultados de la Búsqueda</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Puesto</th>
            </tr>";

    while ($fila = $resultado->fetch_assoc()) 
    {
        echo "<tr>
                <td>".$fila["id"]."</td>
                <td>".$fila["Nombre"]."</td>
                <td>".$fila["Apellido"]."</td>
                <td>".$fila["Puesto"]."</td>
            </tr>";
    }

    echo "</table>";
} 

?>

