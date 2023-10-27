<?php
$usuarios = array(
    "user1" => array(
        "nombre" => 'Ane',
        "apellidos" => 'López',
        "password" => '123Abc'
    ),
    "user2" => array(
        "nombre" => 'Amaia',
        "apellidos" => 'Otsoa',
        "password" => '456Xyz'
    )
);

$ERROR_TYPES = [
    1 => "el usuario o la contraseña no son corectos"
];

function comprobarLogin($usuario, $password, $usuarios) 
{
    if (array_key_exists($usuario, $usuarios)) {
        if ($usuarios[$usuario]["password"] == $password) 
        {
            return 0;
        } else {
            return 1;
        }
    } else {
        return 1;
    }
}

if (isset($_POST["usuario"]) && isset($_POST["password"])) 
{
    $login = comprobarLogin($_POST["usuario"], $_POST["password"], $usuarios);
    if ($login == 0) {
        $nombre = $usuarios[$_POST["usuario"]]["nombre"];
        $apellidos = $usuarios[$_POST["usuario"]]["apellidos"];
        require "ejercicio4Index.php";
    } else {
        $mensaje_error = $ERROR_TYPES[$login];
        require "ejercicio4Login.php";
    }
} else {
 
    require "ejercicio4Login.php";
}