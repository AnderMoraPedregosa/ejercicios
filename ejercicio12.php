<!DOCTYPE html>
<html>
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
            $ciudades = array("Paris","Berlin","Amsterdam","Praga");

            function getValor($array,$posicion)
            {
                if (isset($array[$posicion])) 
                {
                    return $array[$posicion];
                }
                else
                {
                    return "Posicion no valida en el Array";
                }
            }
            function setValor($array,$posicion,$valor)
            {
                if (isset($array[$posicion])) 
                {
                    $array[$posicion] = $valor;
                    return $array;
                }
                else
                {
                    return "Posicion no valida en el array";
                }
            }

            // Ejemplos de uso de las funciones
            echo "Valor en la posición 2: " . getValor($ciudades, 2) . "<br>";

            $ciudadesModificadas = setValor($ciudades, 1, "Londres");
            echo "Array después de modificar la posición 1: ";
            //print_r es para imprimir informacion estructurada(array objetos)
            //ejemplo Array ( [0] => Paris [1] => Londres [2] => Amsterdam [3] => Praga )
            print_r($ciudadesModificadas);
    ?>
</body>
</html>