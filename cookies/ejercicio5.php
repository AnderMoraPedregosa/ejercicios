<?php
session_start();


$usuarios = array
(
    "user1" => array(
        "nombre" => 'Paco',
        "apellidos" => 'Paco',
        "password" => '1234556'
    ),
    "user2" => array(
        "nombre" => 'Benito',
        "apellidos" => 'Camela',
        "password" => 'AEiou123'
    )
);


$ERROR_TYPES = [
    1 => "La contraseña o el usuario no es correcto."
];

function comprobarLogin($usuario, $password, $usuarios)
{
    if (array_key_exists($usuario, $usuarios)) 
    {
        if ($usuarios[$usuario]["password"] == $password) 
        {
            $_SESSION["usuario"] = $usuario;
            return 0;
        } 
        else 
        {
            return 1;
        }
    } 
        else 
        {
            return 1;
        }
    }
    if(!isset($_SESSION["login"]) || isset($_GET["accion"])) {
        $_SESSION["login"] = -1; 
        $_SESSION["usuario"] = "";
    }
    
 
    if (isset($_POST["usuario"]) && isset($_POST["password"])) {
        $_SESSION["login"] = comprobarLogin($_POST["usuario"], $_POST["password"], $usuarios);
    }
    
    if ($_SESSION["login"] == 0) {
        $nombre = $usuarios[$_SESSION['usuario']]['nombre'];
        $apellidos = $usuarios[$_SESSION['usuario']]['apellidos'];
 
        require "ejercicio5Vista.php";
    } else {
        if($_SESSION["login"] != -1) {

            $mensaje_error = $ERROR_TYPES[$_SESSION["login"]];
  
            require "ejercicio5LoginVista.php";
        }
        else {
       
            require "ejercicio5LoginVista.php";
        }
    }