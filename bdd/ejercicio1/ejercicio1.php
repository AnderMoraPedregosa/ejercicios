<?php
include "conexion1.php"; 

$consulta = "SELECT * FROM productos";
$resultado = $conexion->query($consulta);
?>

<h2>Lista de Compra</h2>
<ul>
    <?php
    while ($fila = $resultado->fetch_assoc()) {
        echo "<li>" . $fila["nombre"] . " - <a href='eliminar.php?id=" . $fila["id"] . "'>Eliminar</a></li>";
    }
    ?>
</ul>

<h2>Añadir Producto</h2>
<form action="agregar.php" method="post">
    <label>Nombre del producto: </label>
    <input type="text" name="nombre">
    <input type="submit" value="Agregar">
</form>
