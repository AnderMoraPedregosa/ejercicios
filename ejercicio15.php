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

        $diccionario = array
        (
            "jvadillo" => array
            (
                "nombre" => "Jon",
                "apellidos" => "Vadillo",
                "email" => "jvadillo@egibide.org"
            ),
            "amora" => array
            (
                "nombre" => "Ander",
                "apellidos" => "Mora",
                "email" => "AMora@ikasle.egibide.org"
            )
        );

        // Función para obtener datos de un usuario
        function getDatos($diccionario, $usuario, $dato) {
            if (isset($diccionario[$usuario][$dato])) {
                echo $diccionario[$usuario][$dato];
            } else {
                echo "Usuario o dato no válido.";
            }
        }

        // Ejemplo de uso de la función 
        getDatos($diccionario, "jvadillo", "email"); 
        getDatos($diccionario,"amora","email");

    ?>
</body>
</html>