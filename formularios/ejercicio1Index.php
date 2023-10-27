<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Convertidor de Temperatura</title>
</head>
<body>
    <h1>Convertidor de Temperatura</h1>
    <form action="ejercicio1.php" method="post">
        <label for="temperatura">Introduce la temperatura:</label>
        <input type="number" id="temperatura" name="temperatura" required><br><br>
        
        <label for="unidad">Selecciona la unidad de temperatura:</label>
        <select id="unidad" name="unidad" required>
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select><br><br>

        <input type="submit" value="Convertir">
        
    </form>
</body>
</html>
