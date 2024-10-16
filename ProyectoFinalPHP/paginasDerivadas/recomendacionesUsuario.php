<?php
    session_start(); // Iniciar la sesión siempre que se maneje datos de sesión

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Guardar las recomendaciones del usuario en la sesión
        $username = $_POST['username'];
        $song1 = $_POST['song1'];
        $song2 = $_POST['song2'];
        $song3 = $_POST['song3'];

        $_SESSION['datosUsuario'] = [
            "nombre" => $username,
            "cancion1" => $song1,
            "cancion2" => $song2,
            "cancion3" => $song3
        ];

        // Almacenar los datos en la variable
        $datosUsuario = [$_SESSION['datosUsuario']];
        
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Verificar si ya hay datos en la sesión
        if (isset($_SESSION['datosUsuario'])) {
            $datosUsuario = [$_SESSION['datosUsuario']];
        }

        // Nuevas recomendaciones añadidas mediante GET
        if (isset($_GET['song1'], $_GET['song2'], $_GET['song3'])) {
            $nuevaRecomendacion1 = $_GET['song1'];
            $nuevaRecomendacion2 = $_GET['song2'];
            $nuevaRecomendacion3 = $_GET['song3'];

            // Añadir nuevas recomendaciones al array existente
            $nuevaRecomendacionFinal = [
                "nombre" => $_SESSION['datosUsuario']['nombre'],
                "cancion1" => $nuevaRecomendacion1,
                "cancion2" => $nuevaRecomendacion2,
                "cancion3" => $nuevaRecomendacion3
            ];

            // Añadir las nuevas recomendaciones al array
            $datosUsuario[] += $nuevaRecomendacionFinal;
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Recomendaciones</title>
    <link rel="stylesheet" href="recomendacionesUsuario.css">
</head>
<body>
    <header>TUS RECOMENDACIONES</header>
    <div class="container">
        <?php
            if (isset($datosUsuario)) {
                foreach ($datosUsuario as $usuario) {
        ?>
                    <div class="bloqueRecomendacion">
                        <h3>USUARIO: <?php echo htmlspecialchars($usuario['nombre']); ?></h3>
                        <p><?php echo htmlspecialchars($usuario['cancion1']) . "<br>" . htmlspecialchars($usuario['cancion2']) . "<br>" . htmlspecialchars($usuario['cancion3']); ?></p>
                    </div>
        <?php
                }
            } else {
                echo "<p>No hay recomendaciones aún.</p>";
            }
        ?>
    </div>

    <footer>
        <div class="botones">
            <form action="../spotifyRecomender.php" method="post">
                <button type="submit">PÁGINA PRINCIPAL</button>
            </form>
            <form action="anhadirCancion.php" method="post">
                <button type="submit">Nueva Recomendación</button>
            </form>
        </div>
    </footer>
</body>
</html>
