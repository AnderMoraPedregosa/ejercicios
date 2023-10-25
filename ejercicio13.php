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

        // Crear dos arrays
        $animales = array("Perro", "Gato", "Elefante", "Tigre");
        $colores = array("Rojo", "Azul", "Verde", "Amarillo");

        //calcula el numero de elementos de cada array
        $numAnimales = count($animales);
        $numColores = count($colores);

        echo "Número de elementos en el array \$animales: $numAnimales <br>";
        echo "Número de elementos en el array \$colores: $numColores <br>";
        
        //Añade un elemento al final del array $animales utilizando una función
        array_push($animales, "Leon");

        //Añade un elemento al principio del array $colores utilizando una función.
        array_unshift($colores, "Negro");

        //Crea un tercer array que incluya los elementos de los dos arrays
        $tercerArray = array_merge($animales, $colores);
        print_r($tercerArray);

    ?>
</body>
</html>