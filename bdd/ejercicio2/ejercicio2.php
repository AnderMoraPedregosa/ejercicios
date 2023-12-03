<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Lista de Empleados</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>

<?php require('partials/nav.php'); ?>





<h2>Lista de Empleados</h2>
<h2>Buscar Empleado</h2>
<form action="buscar.php" method="get">
    <label>Nombre:</label>
    <input type="text" name="nombre">
    <input type="submit" value="Buscar">
</form>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Puesto</th>
        <th>Acciones</th>
    </tr>

    <?php
    include "conexion2.php";

    $consulta = "SELECT * FROM empleados";
    $resultado = $conexion->query($consulta);

    while ($fila = $resultado->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$fila["id"]."</td>";
        echo "<td>".$fila["Nombre"]."</td>";
        echo "<td>".$fila["Apellido"]."</td>";
        echo "<td>".$fila["Puesto"]."</td>";
        echo "<td><a href='eliminar.php?id=" . $fila["id"] . "'>Eliminar</a></td>";
        echo "<td><a href='detalle.php?id="  .$fila["id"] . "'> Ver detalle del empleado</a></td>";
        echo "</tr>";
    }
    ?>
</table>

<h2>Agregar Empleado</h2>
<form action="insertar.php" method="post">
    <label>Nombre:</label>
    <input type="text" name="Nombre" required><br>
    <label>Apellido:</label>
    <input type="text" name="Apellido" required><br>
    <label>Puesto:</label>
    <input type="text" name="Puesto" required><br>
    <input type="submit" value="Agregar Empleado">
</form>



<?php require('partials/footer.php'); ?>

</body>
</html>
