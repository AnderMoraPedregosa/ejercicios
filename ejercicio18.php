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
        $usuarios = [
            "user1" => [
                "nombre" => "Nora",
                "password" => "123123",
                "email" => "nora@php.net"
            ],
           
        ];
        
        function validarUsuario($usuario, $contrasena) {
            global $usuarios;
            if (array_key_exists($usuario, $usuarios)) {
                $usuarioInfo = $usuarios[$usuario];
                if ($usuarioInfo["password"] === $contrasena) {
                    return "Usuario: " . $usuarioInfo["nombre"] . "<br>Email: " . $usuarioInfo["email"] . "<br>¡Contraseña correcta!";
                } else {
                    return "¡Contraseña incorrecta!";
                }
            } else {
                return "Usuario no encontrado";
            }
        }
        
        if (isset($_GET['usuario']) && isset($_GET['contrasena'])) {
            $usuario = $_GET['usuario'];
            $contrasena = $_GET['contrasena'];
            $resultado = validarUsuario($usuario, $contrasena);
            echo $resultado;
        } else {
            echo "Por favor, proporcione un usuario y una contraseña.";
        }
    ?>
</body>
</html>