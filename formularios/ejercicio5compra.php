<?php

require 'ejercicio5baseDeDatos.php';


function calcularImporte($productos)
{
    $total = 0;
    foreach ($productos as $id => $producto)
    {
        if (isset($_GET[$id])) 
        {
            $total = $total + $producto["precio"]*$_GET[$id];
        }
    }
    return $total;
}

require 'ejercicio5compravista.php';