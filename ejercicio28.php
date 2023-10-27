<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<p>El usuario conectado es: <?= $nombre_usuario ?></p>
<ul>
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
    foreach ($elementos as $elemento){
        $lista .= generarElemento($elemento);
    }
    return $lista."</ul>";
}


foreach ($marcas as $elemento) 
{?>
    <li><?= $elemento ?></li>
<?php 
}
?>
</ul>

</body>
</html>