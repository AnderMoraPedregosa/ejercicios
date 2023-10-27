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

$estudiantes = [ "Ane", "Markel", "Nora",
                 "Danel", "Amaia", "Izaro"];

function generarElemento($elemento) 
{
    return "<li>$elemento</li>";
}

function generarListado($elementos) 
{
    $lista = "<ul>";
    for($i=0; $i<count($elementos); $i++) 
    {
        $lista .= generarElemento($elementos[$i]); //<li>Mikel</li>
    }
    return $lista."</ul>";
}


 generarListado($estudiantes) ;

 ?>

</body>
</html>