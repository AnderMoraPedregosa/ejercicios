<!doctype html>
<html lang="es">
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<hr>

<h5>Detalles del producto:</h5>
<table class="table">
    <tr>
        <td>ID</td><td><?= $id?></td>
    </tr>
    <tr>
        <td>Nombre</td><td><?= $nombre ?></td>
    </tr>
    <tr>
        <td>Descripción</td><td><?= $descripcion ?></td>
    </tr>
    <tr>
        <td>Precio</td><td><?= $precio ?></td>
    </tr>
</table>

<p>
    <a class="btn btn-primary" href="ejercicio10.php">Volver</a>
</p>



</body>
</html>