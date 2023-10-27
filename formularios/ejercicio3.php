<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Números</title>
</head>
<body>
    <h1>Contador de Números</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numerosAleatorios = $_POST["numerosAleatorios"];
        $numeroUsuario = $_POST["numeroUsuario"];

        $numerosArray = explode(",", $numerosAleatorios);
        $contador = 0;

        foreach ($numerosArray as $numero) {
            if ($numero == $numeroUsuario) {
                $contador++;
            }
        }

        echo "<p><strong>Números Aleatorios:</strong> $numerosAleatorios</p>";
        echo "<p><strong>Número Ingresado por el Usuario:</strong> $numeroUsuario</p>";
        echo "<p><strong>Resultado:</strong> El número $numeroUsuario aparece $contador veces en el array.</p>";
    }
    ?>
    <br>
    <a href="ejercicio3Index.php">Volver al formulario</a>
</body>
</html>
