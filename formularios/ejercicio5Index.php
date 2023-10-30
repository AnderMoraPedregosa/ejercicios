<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
    
</head>
<body>



<form action="ejercicio5compra.php" method="get">
    <table class='tabla'>
        <thead>
            <tr><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Cantidad</th></tr>
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
            <td><input type='number' name='<?= $id ?>' value='0' required></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <input type="submit" value="Comprar" class="boton">
</form>


</body>
</html>