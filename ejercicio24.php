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

$agenda = [
    ["nombre" => "Amaia", "apellidos"=>"Gorbea Jainaga", "telefono"=>"945111111", "email"=>"agorbea@php.net"],
    ["nombre" => "Ane", "apellidos"=>"Larrain Ogueta", "telefono"=>"945222222", "email"=>"alarrain@php.net"],
    ["nombre" => "Maite", "apellidos"=>"Murgiondo Lekue", "telefono"=>"945333333", "email"=>"mmurgiondo@php.net"],
    ["nombre" => "Lorea", "apellidos"=>"Aranceta Otxoa", "telefono"=>"945444444", "email"=>"laranceta@php.net"],
    ["nombre" => "Markel", "apellidos"=>"Gurrutxaga Abarra", "telefono"=>"945555555", "email"=>"mgurrutxaga@php.net"],
    ["nombre" => "Urtzi", "apellidos"=>"Iriondo Baiona", "telefono"=>"945666666", "email"=>"uiriondo@php.net"]
];

function generarFila($nombre, $apellidos, $telefono, $email) 
{
    return "<tr>
                <td>$nombre</td>
                <td>$apellidos</td>
                <td>$telefono</td>
                <td>$email</td>
            </tr>";
}

function generarTabla($elementos) 
{
    $tablaHTML = "<table border='1'>";
    for($x=0; $x<count($elementos); $x++) 
    {
        $tablaHTML .= generarFila(
            $elementos[$x]["nombre"],
            $elementos[$x]["apellidos"],
            $elementos[$x]["telefono"],
            $elementos[$x]["email"]);
    }
    return $tablaHTML."</table>";
}

generarTabla($agenda) ;
?>

</body>
</html>