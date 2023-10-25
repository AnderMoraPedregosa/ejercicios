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
        $a = 10;
        $b = 2;
        
        //suma de a y b
        $suma = $a + $b;

        //reste de a y b
        $resta = $a - $b;

        //division
        $division = $a / $b;

        //mayor que b
        $mayorQue = $a > $b;


        //menor que b
        $menorQue = $a < $b;

        echo " <p> Suma de a y b: $suma </p>";
        echo " <p> Resta de a y b: $resta </p>";
        echo " <p> División de a entre n $division </p>";
        echo " <p> Resultado mayor que b: ".var_export($mayorQue, true). "</p>";
        echo " <p> Resultado menor que b: ".var_export($menorQue, true). "</p>";
        

    ?>
</body>
</html>