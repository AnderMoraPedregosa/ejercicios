<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Números</title>
</head>
<body>
    <h1>Contador de Números</h1>

    <?php
    // Generar números aleatorios
    $numerosAleatorios = implode(",", array_map(function() {
        return random_int(1, 10);
    }, range(1, 20)));
    ?>

    <form action="ejercicio3.php" method="post">
        <input type="hidden" name="numerosAleatorios" value="<?= $numerosAleatorios ?>">
        <label for="numeroUsuario">Introduce un número:</label>
        <input type="number" id="numeroUsuario" name="numeroUsuario" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
