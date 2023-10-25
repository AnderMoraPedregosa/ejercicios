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
    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
/*
$usuario = $_GET["usuario"];
$saludo = "<p>bienvenido, $usuario </p>";
http://localhost/daws-php-2023-24
/ejercicios/ejercicio3.php?usuario=ander 
*/
$hi = "<p> Bienvenido $nombre con $edad años";
echo $hi
  ?>  
</body>
</html>
