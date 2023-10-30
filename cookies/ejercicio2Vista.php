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
  <?php
    if (isset($usuario) && !empty(trim($usuario)))
     {
        ?>
        <p>Usuario guardado <?= $usuario ?></p>
        <?php
    }
    else 
    {
        ?>
        <p>No hay ningun usuario</p>
        <?php
    }
    ?>
    <form action="ejercicio2.php" method="get">
        <label for="texto"> Introduce un texto </label>
        <input type="text" name="texto">
        <input type="submit" value="guardar">
    </form> 
    <a href="ejercicio2.php?accion=borrarCookie"> Borrar</a>
</body>
</html>
