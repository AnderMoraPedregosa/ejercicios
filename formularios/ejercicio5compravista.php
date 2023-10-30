<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
</head>
<body>

<h1>Tienda</h1>
<h2> Compra finalizada </h2>
<h3>Precio</h3>
<p>El precio final a pagar por la compra es <?= calcularImporte($productos) ?></p>
<ul>
<?php
foreach($productos as $id => $producto)
{
    if (isset($_GET[$id]) && $_GET[$id]> 0)
    {
        ?>
        <li> <?= $producto['nombre'] ?> (<?=$_GET[$id]?>)</li>
        <?php
    }
}
?>
</ul>
<a href="ejercicio5.php" class="enlace"> Ir a atras </a>



</body>
</html>