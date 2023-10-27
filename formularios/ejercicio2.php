<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacion = $_POST["operacion"];
        $resultado = 0;

        switch ($operacion) {
            case "suma":
                $resultado = $numero1 + $numero2;
                break;
            case "resta":
                $resultado = $numero1 - $numero2;
                break;
            case "multiplicacion":
                $resultado = $numero1 * $numero2;
                break;
            case "division":
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                } else {
                    echo "<p>Error: No se puede dividir entre cero.</p>";
                }
                break;
            default:
                echo "<p>Error: Operación no válida.</p>";
                break;
        }

        if ($operacion != "division" || ($operacion == "division" && $numero2 != 0)) {
            echo "<p>Resultado de la operación: $resultado</p>";
        }
    }
    ?>
    <br>
    <a href="ejercicio2Index.php">Volver al formulario</a>
</body>
</html>
