<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BodegApp</title>
    <!-- Estilos CSS personalizados -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        .logo {
            font-size: 1.8em;
        }

        .nav-pills {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            text-align: center;
        }

        .nav-item {
            margin-right: 20px;
        }

        .nav-link {
            color: #4CAF50;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-link:hover {
            text-decoration: underline;
        }
    </style>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <i class="fas fa-store"></i> BodegApp
        </div>
    </header>
    <div class="nav-pills">
        <a href="index.php" class="nav-link">Bodegas</a>
        <a href="index.php?accion=bodega_crear" class="nav-link"><i class="fas fa-plus"></i> Nueva bodega</a>
    </div>
    <div><!-- Contenido de tu página va aquí --></div>

    <!-- JavaScript de Font Awesome (opcional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
