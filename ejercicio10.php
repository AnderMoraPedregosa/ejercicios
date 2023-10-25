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
            function concatenarCadenas($cadena1, $cadena2 = " mundo!") 
            {
                return $cadena1 . $cadena2;
            }
            
           
            $cadena1 = "Hola, ";
            $resultado = concatenarCadenas($cadena1);
            
            echo "<p>La concatenación de las cadenas es: " . $resultado ."</p>";
    ?>

</body>
</html>