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


?>
</body>
</html>