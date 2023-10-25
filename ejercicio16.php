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

        function realizarOperacion($numero1, $numero2) 
        {
            if ($numero1 != $numero2) 
            {
                
                $resultado = $numero1 + $numero2;
                echo "La suma de $numero1 y $numero2 es: $resultado";
            } else 
            {
               
                $resultado = $numero1 * $numero2;
                echo "El producto de $numero1 y $numero2 es: $resultado";
            }
        }

        // Obtener los números mediante GET
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        // Llamar a la función para realizar la operación
        realizarOperacion($numero1, $numero2);

    ?>
</body>
</html>