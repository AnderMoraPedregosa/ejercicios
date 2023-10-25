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
            function esMayor($numero1,$numero2)
            {
                return $numero1 > $numero2;
            }
            $numero1 = 10;
            $numero2 = 5;

            if (esMayor($numero1,$numero2)) 
            {
                echo "<p>El numero $numero1 es mayor que $numero2</p>";
            }
            else 
            {
                echo "<p>El numero $numero2 es mayor que $numero1</p>";
            }
    ?>

</body>
</html>