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
            function concatenarCadenas($cadena1,$cadena2)
            {
                return $cadena1 . $cadena2;
            }
            $cadena1 = "Hola ";
            $cadena2 = "mundo! ";

            $resultado = concatenarCadenas($cadena1,$cadena2);
            echo "<p> La concatenacion de las cadenas es: ". $resultado;
    ?>
</body>
</html>