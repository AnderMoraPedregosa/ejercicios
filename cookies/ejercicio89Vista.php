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

<h5>Cesta de la compra:</h5>
<?php
if(isset($productosComprados)) 
{
?>
    <ul>
    <?php
        foreach ($productosComprados as $idProducto) 
        {
            ?>
            <li><?= $productos[$idProducto]['nombre'] ?></li>
            <?php
        }
    ?>
    </ul>
    <p>Precio total: <?= $precioTotal ?></p>
    <a href='ejercicio89.php?accion=comprar' class='btn btn-primary'>Comprar</a>
<?php
} 
else 
{
?>
    <p>La cesta está vacía</p>
<?php
}
?>

<hr>
<h5>Catálogo de productos:</h5>

<table class='table'>
    <thead>
    <tr><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Detalle</th><th>Comprar</th></tr>
    </thead>
    <tbody>
    <?php
    foreach ($productos as $id => $producto) 
    {
        ?>
        <tr>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['descripción'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><a href='ejercicio89.php?accion=detalle&idProducto=<?= $id ?>'>Detalle</a></td>
            <td><a href='ejercicio89.php?accion=insertar&idProducto=<?= $id ?>'>Comprar</a></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>



</body>
</html>