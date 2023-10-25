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

function sumaNumerosPares($numero) {
    $suma = 0;
    for ($i = 0; $i <= $numero; $i++) {
        if ($i % 2 == 0) {
           
            $suma += $i;
            if ($suma > 100) {
                // Si la suma es mayor que 100, devuelve el valor anterior al superar 100
                $suma -= $i; // Resta el número actual para devolver el valor antes de superar 100
                break;
            }
        }
    }
    return $suma;
}

if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']); // Convierte el valor a un entero
    $resultado = sumaNumerosPares($numero);
    echo "La suma de números pares entre 0 y $numero que no supera 100 es: $resultado";
} else {
    echo "Por favor, proporcione un número.";
}

?>



</body>
</html>