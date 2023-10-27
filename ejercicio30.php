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
$notasEstudiantes = array(
    "Julen" => 6.8,
    "María" => 8.2,
    "Carlos" => 7.5,
    "Laura" => 9.0,
    "Pedro" => 6.0,
    "Elena" => 8.7
);

foreach ($notasEstudiantes as $nombre => $notaMedia)
{
    echo "La nota media de $nombre es $notaMedia <br>";
}
?>


</body>
</html>