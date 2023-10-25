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
//es necesario que esten en la misma carpeta o se puede poner ordenado?
require('ejercicio11a.php'); 
$cadena1 = "Hola, ";
$resultado = concatenarCadenas($cadena1);
echo "<p>La concatenación de las cadenas es: " . htmlspecialchars($resultado) . "</p>";
?>
</body>
</html>