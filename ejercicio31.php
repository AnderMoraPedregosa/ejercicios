<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php
$randomNumbers = [];
for ($i = 0; $i < 20; $i++) 
{
    $randomNumbers[] = random_int(1, 999);
}

$valorMasAlto = $randomNumbers[0];
$valorMasBajo = $randomNumbers[0];

foreach ($randomNumbers as $numero) 
{
    if ($numero > $valorMasAlto) 
    {
        $valorMasAlto = $numero;
    }
    if ($numero < $valorMasBajo) 
    {
        $valorMasBajo = $numero;
    }
}

echo "El valor más alto es: $valorMasAlto <br>";
echo "El valor más bajo es: $valorMasBajo";
?>


</body>
</html>