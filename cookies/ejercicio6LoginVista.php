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



<?php
if (isset($mensaje_error)) {
    if ($_SESSION["login"] == 2) {
        echo "<p style='color:red;'>Has superado el número máximo de intentos en esta sesión.</p>";
    } else {
        echo "<p style='color:red;'>$mensaje_error</p>";
    }
}
?>

<form action='ejercicio6.php' method='post'>
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