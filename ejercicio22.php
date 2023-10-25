<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>


<ul>
    <li>La posición de Islandia es: <?= encontrarPosicion($paises, "Islandia") ?></li>
    <li>La posición de Marruecos es: <?= encontrarPosicion($paises, "Marruecos") ?></li>
    <li>La posición de Brasil es: <?= encontrarPosicion($paises, "Brasil") ?></li>
    <li>La posición de Andorra es: <?= encontrarPosicion($paises, "Andorra") ?></li>
</ul>
<?php

$paises = ["Brasil", "Portugal", "Islandia",
           "Mexico", "Filipinas", "Marruecos"];

function encontrarPosicion($paises, $pais) 
{

    for($x = 0; $x < count($paises); $x++) 
    {
        if($paises[$x] == $pais) 
        {
            return $x;
        }
    }
    return -1;
}

require "ejercicio22.view.php";
?>
</body>
</html>