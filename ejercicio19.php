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

function sumaNumeros($numero) {
    $suma = 0;
    for ($i = 0; $i <= $numero; $i++) {
        if ($i % 2 == 0) {
            
            continue;
        }
        if ($i > 10) {
           
            break;
        }
        $suma += $i;
    }
    return $suma;
}

if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']); // Convierte el valor a un entero
    $resultado = sumaNumeros($numero);
    echo "La suma de números impares entre 0 y $numero (menores o iguales a 10) es: $resultado";
} else {
    echo "Por favor, proporcione un número.";
}

?>

</body>
</html>