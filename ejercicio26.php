<!DOCTYPE html>
<html lang="en">
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

$marcas = ["Audi", "Seat", "Mercedes", 
           "Volskwagen", "BMW", "Fiat"];

function generarElemento($elemento)
 {
    return "<li>$elemento</li>";
}

function generarListado($elementos)
 {
    $lista = "<ul>";
    $index = 0;
    do {
        $lista .= generarElemento($elementos[$index]);
        $index++;
    } while($index<count($elementos));
    return $lista."</ul>";
}


generarListado($marcas);
 ?>

</body>
</html>