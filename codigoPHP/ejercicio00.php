<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 0</title>
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
            <h2>Ejercicio 0</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Calderón Pérez
                     * @since 07-10-2026
                     * Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
                     */

                    // 1. Mostrar $_SESSION
                    echo "<h3>Contenido de \$_SESSION:</h3>";
                    echo "<pre>";
                    print_r($_SESSION);
                    echo "</pre>";

                    // 2. Mostrar $_COOKIE
                    echo "<h3>Contenido de \$_COOKIE:</h3>";
                    echo "<pre>";
                    print_r($_COOKIE);
                    echo "</pre>";

                    // 3. Mostrar $_SERVER
                    echo "<h3>Contenido de \$_SERVER:</h3>";
                    echo "<pre>";
                    print_r($_SERVER);
                    echo "</pre>";

                    // 4. Mostrar el resto de $GLOBALS
                    echo "<h3>Resto de variables globales:</h3>";
                    echo "<pre>";
                    // Hacemos una copia de $GLOBALS para no alterar el array original del sistema
                    $resto_globals = $GLOBALS;

                    // Eliminamos las variables que ya hemos mostrado
                    unset($resto_globals['_SESSION']);
                    unset($resto_globals['_COOKIE']);
                    unset($resto_globals['_SERVER']);
                    // También puedes ocultar $_GLOBALS para que no haga una recursión infinita visualmente
                    unset($resto_globals['GLOBALS']); 

                    // Imprimimos lo que queda
                    print_r($resto_globals);
                    echo "</pre>";
                    
                    echo "<br>";
                    echo "<br>";
                    
                    phpinfo();
                    
                    
                ?>
        </div>
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

