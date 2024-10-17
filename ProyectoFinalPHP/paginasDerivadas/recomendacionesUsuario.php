<?php
    session_start();
    $recomendacionesUsuario = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        

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

        array_push($recomendacionesUsuario, $_SESSION['datosUsuario']);
        $_SESSION["recomendacionesGuardadas"] = $recomendacionesUsuario;
        
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        $recomendacionesUsuario = $_SESSION["recomendacionesGuardadas"];



        if (isset($_GET['song1'], $_GET['song2'], $_GET['song3'])) {
            $nuevaRecomendacion1 = $_GET['song1'];
            $nuevaRecomendacion2 = $_GET['song2'];
            $nuevaRecomendacion3 = $_GET['song3'];


            $nuevaRecomendacionFinal = [
                "nombre" => $_SESSION['datosUsuario']['nombre'],
                "cancion1" => $nuevaRecomendacion1,
                "cancion2" => $nuevaRecomendacion2,
                "cancion3" => $nuevaRecomendacion3
            ];


            array_push($recomendacionesUsuario,$nuevaRecomendacionFinal);
            $_SESSION["recomendacionesGuardadas"] = $recomendacionesUsuario;
    }else{
        $recomendacionesUsuario = $_SESSION['recomendacionesGuardadas'];
    }
    }
    $_SESSION["recomendacionesGuardadas"] = $recomendacionesUsuario;
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
            if (isset($recomendacionesUsuario)) {
                foreach ($recomendacionesUsuario as $usuario) {
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
