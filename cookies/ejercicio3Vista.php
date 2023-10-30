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
    if(isset($idioma))
    {
        ?>
        <p>Idioma: <?= $idioma ?></p>
        <?php
    }
    else
    {
        ?>
        <p>No hay ningun idioma guardado</p>
        <?php
    }
    ?>

        <form action="ejercicio3.php" method="get">
            <p>
                <label for="texto"> Elge un idioma </label>
                <select name="idioma">
                    <option value="castellano"> Castellano</option>
                    <option value="euskera"> Euskera</option>
                </select>
            </p>
            <input type="submit" value="guardar">
        </form>
</body>
</html>
