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
<table border="1">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Nota 1</th>
        <th>Nota 2</th>
        <th>Nota media</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $estudiantes = array(
        "Luis Scola" => [9, 8],
        "Pablo Prigioni" => [8, 4],
        "Sergi Vidal" => [7, 6],
        "Ramón Rivas" => [3.5, 6]
    );


    function calcularNotaMedia($nota1, $nota2) 
    {
        return round(($nota1 + $nota2) / 2, 2);
    }

    function calcularEstilo($nota) {
        if ($nota < 5) {
            return "color: red";
        }
        return "color:black";
    }

    foreach ($estudiantes as $nombre => $notas) {
        $notaMedia = calcularNotaMedia($notas[0], $notas[1]);
        echo "
                <tr>
                <td>{$nombre}</td>
                <td style='" . calcularEstilo($notas[0]) . "'>{$notas[0]}</td>
                <td style='" . calcularEstilo($notas[1]) . "'>{$notas[1]}</td>
                <td style='" . calcularEstilo($notaMedia) . "'>{$notaMedia}</td>
                </tr>
            ";
    }
    ?>
    </tbody>
</table>
</body>
</html>