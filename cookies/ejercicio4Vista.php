<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<ul>
<?php
if(count($personas) > 0 ) {
    foreach ($personas as $persona) {
?>
        <li><?= $persona ?></li>
<?php
    }
}
else {
?>
    <p>No hay asistentes</p>
<?php
}
?>
</ul>
<br>
<h5>Añadir asistente</h5>
<form action="ejercicio4.php" method="get">
    <input type="text" name="persona">
    <input type="hidden" name="accion" value="insertar">
    <input type="submit" value="Añadir">
</form>
<br>
<a href="ejercicio4.php?accion=vaciar">Vaciar lista</a>
</body>
</body>
</html>
