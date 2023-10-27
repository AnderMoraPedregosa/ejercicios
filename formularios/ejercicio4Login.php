<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formularios</title>
</head>
<body>



<?php

if(isset($mensaje_error)) 
{
?>
    <p style='color:red;'><?= $mensaje_error ?></p>
<?php 
} ?>

<form action='./ejercicio4.php' method='post'>
    <fieldset>
        <legend>Login</legend>
        <p>Introduce tu usuario y contraseña:</p>
        <p>
            <label for='usuario'>Introduce el usuario:</label>
            <input type='text' id='usuario' name='usuario' required>
        </p>
        <p>
            <label for='password'>Introduce la contraseña:</label>
            <input type='password' id='password' name='password' required>
        <p>
        <p>
            <input type='submit' value='Enviar'>
        </p>
    </fieldset>
</form>

</body>
</html>