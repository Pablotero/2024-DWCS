<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['nombre'] = "sesionIniciada";
    }else{
        session_unset();    
        session_destroy();
    }
    $artistas = [
        ["nombre"=>"RAUW ALEJANDRO", "imagen"=>"Imagenes/Rauw/Rauw.jpeg", "pagina"=>"artistas/rauw.php"],
        ["nombre"=>"MORA", "imagen"=>"Imagenes/Mora/Mora.jpeg", "pagina"=>"artistas/mora.php"],
        ["nombre"=>"NSQK", "imagen"=>"Imagenes/NSQK/nsqk.jpeg", "pagina"=>"artistas/nsqk.php"],
        ["nombre"=>"ALVARO DIAZ", "imagen"=>"Imagenes/AlvaroDiaz/AlvaroDiaz.jpeg", "pagina"=>"artistas/alvaroDiaz.php"],
        ["nombre"=>"FEID", "imagen"=>"Imagenes/Feid/Feid.jpeg", "pagina"=>"artistas/feid.php"],
        ["nombre"=>"BAD BUNNY", "imagen"=>"Imagenes/BadBunny/BadBunny.jpeg", "pagina"=>"artistas/badBunny.php"],
        ["nombre"=>"MYKE TOWERS", "imagen"=>"Imagenes/MykeTowers/MykeTowers.jpeg", "pagina"=>"artistas/mykeTowers.php"],
        ["nombre"=>"JHAYCO", "imagen"=>"Imagenes/Jhayco/Jhayco.jpeg", "pagina"=>"artistas/jhayco.php"],
    ];

    $usuarios = [
        ["nombre"=>"PabloOtero", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/3Bp0XlRQv0URQMM6ABKhEE?si=6ed95c0d4dda4f11 \" > <h5> DATA: VOLVER </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <h5> ATT. : NO QUIERO PELEAR (YOUNG MIKO ft. ELENA ROSE) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/6LgZURTxqvwE5c6i5Wxe0g?si=3f64a868e2e44bb7 \" > <h5> EL NIÑO DE LOS CORAZONES ROTOS: POEMA A TUS PRONLEMAS (LEGALLY) </h5> </a>" ],
        ["nombre"=>"JuanLorenzo", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/3CA9pLiwRIGtUBiMjbZmRw?si=be65d3d557eb4b6b \" > <h5> SCORPION: NICE FOR WHAT </h5> </a>", "cancion2"=>"<a href= \" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <h5> AFRODISÍACO: DILE A ÉL (RAUW ALEJANDRO) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/13Tbv4nflNxg9kYBIbJnd9?si=69b9b1e96c404010 \" > <h5> THE COLLEGE DROPOUT: THROUGH THE WIRE </h5> </a>" ],
        ["nombre"=>"IzanSantos", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/3Bp0XlRQv0URQMM6ABKhEE?si=6ed95c0d4dda4f11 \" > <h5> DATA: VOLVER </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <h5> ATT. : NO QUIERO PELEAR (YOUNG MIKO ft. ELENA ROSE) </h5> </a>", "cancion3"=>"<a href0 \" https://open.spotify.com/intl-es/track/6LgZURTxqvwE5c6i5Wxe0g?si=3f64a868e2e44bb7 \" > <h5> EL NIÑO DE LOS CORAZONES ROTOS: POEMA A TUS PRONLEMAS (LEGALLY) </h5> </a>" ],
        ["nombre"=>"DanielFortuño", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/3Bp0XlRQv0URQMM6ABKhEE?si=6ed95c0d4dda4f11 \" > <h5> DATA: VOLVER </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <h5> ATT. : NO QUIERO PELEAR (YOUNG MIKO ft. ELENA ROSE) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/6LgZURTxqvwE5c6i5Wxe0g?si=3f64a868e2e44bb7 \" > <h5> EL NIÑO DE LOS CORAZONES ROTOS: POEMA A TUS PRONLEMAS (LEGALLY) </h5> </a>" ],
        ["nombre"=>"JorgeCrespo", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/3Bp0XlRQv0URQMM6ABKhEE?si=6ed95c0d4dda4f11 \" > <h5> DATA: VOLVER </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <h5> ATT. : NO QUIERO PELEAR (YOUNG MIKO ft. ELENA ROSE) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/6LgZURTxqvwE5c6i5Wxe0g?si=3f64a868e2e44bb7 \" > <h5> EL NIÑO DE LOS CORAZONES ROTOS: POEMA A TUS PRONLEMAS (LEGALLY) </h5> </a>" ],
        ["nombre"=>"FidelRiobó", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/3Bp0XlRQv0URQMM6ABKhEE?si=6ed95c0d4dda4f11 \" > <h5> DATA: VOLVER </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <h5> ATT. : NO QUIERO PELEAR (YOUNG MIKO ft. ELENA ROSE) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/6LgZURTxqvwE5c6i5Wxe0g?si=3f64a868e2e44bb7 \" > <h5> EL NIÑO DE LOS CORAZONES ROTOS: POEMA A TUS PRONLEMAS (LEGALLY) </h5> </a>" ],
        ["nombre"=>"CameronGarcía", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/3Bp0XlRQv0URQMM6ABKhEE?si=6ed95c0d4dda4f11 \" > <h5> DATA: VOLVER </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <h5> ATT. : NO QUIERO PELEAR (YOUNG MIKO ft. ELENA ROSE) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/6LgZURTxqvwE5c6i5Wxe0g?si=3f64a868e2e44bb7 \" > <h5> EL NIÑO DE LOS CORAZONES ROTOS: POEMA A TUS PRONLEMAS (LEGALLY) </h5> </a>" ],
        ["nombre"=>"JoséLorenzo", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/3Bp0XlRQv0URQMM6ABKhEE?si=6ed95c0d4dda4f11 \" > <h5> DATA: VOLVER </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <h5> ATT. : NO QUIERO PELEAR (YOUNG MIKO ft. ELENA ROSE) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/6LgZURTxqvwE5c6i5Wxe0g?si=3f64a868e2e44bb7 \" > <h5> EL NIÑO DE LOS CORAZONES ROTOS: POEMA A TUS PRONLEMAS (LEGALLY) </h5> </a>" ],
        ["nombre"=>"PabloMartín", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/3Bp0XlRQv0URQMM6ABKhEE?si=6ed95c0d4dda4f11 \" > <h5> DATA: VOLVER </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <h5> ATT. : NO QUIERO PELEAR (YOUNG MIKO ft. ELENA ROSE) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/6LgZURTxqvwE5c6i5Wxe0g?si=3f64a868e2e44bb7 \" > <h5> EL NIÑO DE LOS CORAZONES ROTOS: POEMA A TUS PRONLEMAS (LEGALLY) </h5> </a>" ],
    ]
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="spotifyRecomender.css">
    <title>Spotify Recomender</title>
</head>
<body>
    <header>
        <h1>Spotify Recomender</h1>
    </header>
    <?php
        $indicesUsados = [];

        function obtenerArtistaAleatorio($totalArtistas, &$indicesUsados) {
            do {
                // Generar un número aleatorio
                $numeroArtista = random_int(0, $totalArtistas - 1);
            } while (in_array($numeroArtista, $indicesUsados)); // Repetir si ya fue usado

            // Agregar el número generado a la lista de usados
            $indicesUsados[] = $numeroArtista;

            return $numeroArtista;
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="image-card">
                <?php
                    $artista = $artistas[obtenerArtistaAleatorio(7, $indicesUsados)];
                ?>
                <img src="<?php echo $artista['imagen']; ?>" alt="<?php echo $artista['nombre']; ?>">
                <a href="<?php echo $artista['pagina']; ?>"> <p> <?php echo $artista['nombre']; ?> </p> </a>
            </div>

            <div class="image-card">
                <?php
                    $artista = $artistas[obtenerArtistaAleatorio(7, $indicesUsados)];
                ?>
                <img src="<?php echo $artista['imagen']; ?>" alt="<?php echo $artista['nombre']; ?>">
                <a href="<?php echo $artista['pagina']; ?>"> <p> <?php echo $artista['nombre']; ?> </p> </a>
            </div>

            <div class="image-card">
                <?php
                    $artista = $artistas[obtenerArtistaAleatorio(7, $indicesUsados)];
                ?>
                <img src="<?php echo $artista['imagen']; ?>" alt="<?php echo $artista['nombre']; ?>">
                <a href="<?php echo $artista['pagina']; ?>"> <p> <?php echo $artista['nombre']; ?> </p> </a>
            </div>

        </div>

        <div class="row">
            <div class="image-card">
                <?php
                    $artista = $artistas[obtenerArtistaAleatorio(7, $indicesUsados)];
                ?>
                <img src="<?php echo $artista['imagen']; ?>" alt="<?php echo $artista['nombre']; ?>">
                <a href="<?php echo $artista['pagina']; ?>"> <p> <?php echo $artista['nombre']; ?> </p> </a>
            </div>
            
        <!-- DIV DEDICADO AL USUSARIO Y LOGIN -->
            
            <?php
                if (isset($_SESSION['nombre'])) {

                    $usuario = $usuarios[random_int(0, count($usuarios) - 1)]
            ?>
                    <div  class="image-card">
                        <h4><?php echo $usuario["nombre"]?></h4>
                        <?php echo $usuario["cancion1"]."<br>".$usuario["cancion2"]."<br>".$usuario["cancion3"] ?>
                    </div>
            <?php
                }else{
            ?>
                    <div class="image-card" >
                        <img src="Imagenes/Mix/FotoUsuario.png" alt="">
                        <a href=""> <p>INICIA SESION PARA ACCEDER</p> </a>
                    </div>
            <?php
                }
            ?>
            


            <div class="image-card">
                <?php
                    $artista = $artistas[obtenerArtistaAleatorio(7, $indicesUsados)];
                ?>
                <img src="<?php echo $artista['imagen']; ?>" alt="<?php echo $artista['nombre']; ?>">
                <a href="<?php echo $artista['pagina']; ?>"> <p> <?php echo $artista['nombre']; ?> </p> </a>
            </div>
        </div>

    </div>
    <div class="buttons">
        <form action="paginasDerivadas/logout.php" method="post">
            <button class="botonLogout" type="submit" name="accion" value="logout">LOG-OUT</button>
        </form>
        <form action="paginasDerivadas/recomendacionesUsuario.php" method="POST" >
            <button class="botonRecomendaciones" type="submit" name="accion" value="misRecomendaciones">TUS RECOMENDACIONES</button>
        </form>

        <form action="paginasDerivadas/login.php" method="post" >
            <button class="botonLogin" type="submit" name="accion" value="login">LOG-IN</button>
        </form>
    </div>
       
        
</body>
</html>



