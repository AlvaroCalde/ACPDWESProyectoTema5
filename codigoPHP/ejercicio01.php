<?php
// 1. Lógica y cabeceras al principio del archivo
$aUsuariosPermitidos = [
    'admin' => [
        'password' => 'paso',
        'descripcion' => 'Usuario administrador'
    ]
];

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic realm="ProyectoTema5"');
    header('HTTP/1.1 401 Unauthorized');
    exit;
}

$codigoUsuario = $_SERVER['PHP_AUTH_USER'];
$passwordUsuario = $_SERVER['PHP_AUTH_PW'];

if (isset($aUsuariosPermitidos[$codigoUsuario]) && $aUsuariosPermitidos[$codigoUsuario]['password'] == $passwordUsuario) {
    $descripcionUsuario = $aUsuariosPermitidos[$codigoUsuario]['descripcion'];
} else {
    header('WWW-Authenticate: Basic realm="ProyectoTema5"');
    header('HTTP/1.1 401 Unauthorized');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <style>
        *{
            margin: 0 auto;
            padding: 0 auto;
        }

        nav{
            background-color: black; 
            color: white;
        }

        span{
            color: red;
        }

        .ejercicio{
            margin-top: 10px;
            margin-bottom: 10px;
            width: 1250px;
            border: 1px solid black;
            border-radius: 10px;

            p{
                font-weight: bold;
            }
        }

        footer{
            background-color: black;
            text-align: center;
            align-content: center;
            height: 50px;;
            color: white;
            margin-top: 20%;

            & div a{
                color: white;
               text-decoration: none; 
            }
        }
        footer a img{
            width: 40px;
        }
    </style>
</head>
<body>
    <nav>
        <h2>DWES - Tema 5</h2>
        <h2>Ejercicio 1</h2>
    </nav>
    <main class="ejercicio">
        <h2>Acceso permitido</h2>
        <p>Bienvenido, <?php echo $codigoUsuario; ?>.</p>
        <br>
    </main>
    <footer>
        <div>
            <a href="../indexProyectoTema5.php" color="white">
           Álvaro Calderón Pérez
            </a>
            <a href="../indexProyectoTema5.php"><img src="../webroot/images/casa_blanca.png" alt="home"></a>
        </div>
    </footer>
</body>
</html>

