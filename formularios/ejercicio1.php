<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la Conversión</title>
</head>
<body>
    <h1>Resultado de la Conversión</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $temperatura = $_POST["temperatura"];
        $unidad = $_POST["unidad"];
        
        if ($unidad === "celsius") 
        {
            $fahrenheit = ($temperatura * 9/5) + 32;
            echo "<p>$temperatura grados Celsius son $fahrenheit grados Fahrenheit.</p>";
        } elseif ($unidad === "fahrenheit") 
        {
            $celsius = ($temperatura - 32) * 5/9;
            echo "<p>$temperatura grados Fahrenheit son $celsius grados Celsius.</p>";
        } else 
        {
            echo "<p>Unidad de temperatura inválida.</p>";
        }
    }
    ?>
    
    <br>
    <a href="ejercicio1Index.php">Volver al formulario</a>
</body>
</html>
