<?php
include "conexion2.php";



if (isset($_GET["id"])) 
{
    $id = $_GET["id"];
    $eliminar = " DELETE FROM empleados where id = $id";


    if($conexion->query($eliminar)== TRUE)
    {
        header("location: ejercicio2.php");
        exit();
    }
    else
    {
        echo "error al eliminar el empleado " . $conexion->error;

    }
}
?>