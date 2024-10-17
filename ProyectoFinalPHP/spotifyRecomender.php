<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['nombre'] = "sesionIniciada";
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
        ["nombre"=>"PabloOtero", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/3Bp0XlRQv0URQMM6ABKhEE?si=6ed95c0d4dda4f11 \" > <h5> DATA: VOLVER (TAINY ft.RAUW ALEJANDRO)</h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <h5> ATT. : NO QUIERO PELEAR (YOUNG MIKO ft. ELENA ROSE) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/6LgZURTxqvwE5c6i5Wxe0g?si=3f64a868e2e44bb7 \" > <h5> EL NIÑO DE LOS CORAZONES ROTOS: POEMA A TUS PROBLEMAS (LEGALLY) </h5> </a>" ],
        ["nombre"=>"JuanLorenzo", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/3CA9pLiwRIGtUBiMjbZmRw?si=be65d3d557eb4b6b \" > <h5> SCORPION: NICE FOR WHAT </h5> </a>", "cancion2"=>"<a href= \" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <h5> AFRODISÍACO: DILE A ÉL (RAUW ALEJANDRO) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/13Tbv4nflNxg9kYBIbJnd9?si=69b9b1e96c404010 \" > <h5> THE COLLEGE DROPOUT: THROUGH THE WIRE </h5> </a>" ],
        ["nombre"=>"IzanSantos", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/0fADaWdT3obxk7zvHS18VY?si=325deb5fcd0844e3 \" > <h5> SATURNO: PANTIES Y BRASIERES (RAUW ALEJANDRO) </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/0FDMH2ahuIVzCybwHJK9zh?si=dbc1b9fd0c134f6d \" > <h5> REAL HASTA LA MUERTE: QUIERE BEBER (ANUEL AA) </h5> </a>", "cancion3"=>"<a href0 \" https://open.spotify.com/intl-es/track/0FirgnvrpCkkhdaq64Gfen?si=ccbf8fc8c0b84d6a \" > <h5> DONDE QUIERO ESTAR: YANKEE (QUEVEDO) </h5> </a>" ],
        ["nombre"=>"DanielFortuño", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/2ONADYjJvqYVwjWavuY0H1?si=1925860a3ed34b47 \" > <h5> TRES PUNTOS SUSPENSIVOS: ALMA DINAMITA (WOS)</h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/3vr9p7j0IAhkj6xCVvSZup?si=d2542b62f5c84709 \" > <h5> LACOSTA: LA COSTA (HARDGZ ft.MARCELIUS AIRLINIZE) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/5LlqSCrhvYm97QwfhmY7tc?si=b0646edd6dbc4e46 \" > <h5> PDC: DESAPARECER (MORA)</h5> </a>" ],
        ["nombre"=>"JorgeCrespo", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/3Hu8fyR48EDz7lzOhddEUV?si=521e2ad163484350 \" > <h5>LAZOS Y NUDOS: A MEDIAS VERDADES (ABHIR ft. RECYCLED J) </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/3FnSlzDaB99UuVOMxHVsZc?si=e2c2a6a9720442a1 \" > <h5> DLFEQYQ: DE LA FORMA EN QUE YO QUIERO (L`HAINE ft.NORMANBATE$)</h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/0VhfZo2uwcWnQGExuOxNKq?si=59ad834df18a40a4 \" > <h5> BBO: OJO DE HALCÓN (HOKE ft.LOUIS AMOEBA)</h5> </a>" ],
        ["nombre"=>"FidelRiobó", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/29s3En3YYoYNXfjQD6NgM1?si=f3e557f196c04e9e \" > <h5> LA ESPALDA DEL SOL: BONITO ESTRÉS (DIEGO 900)</h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/7ptBBtnObytjTYLLZ78aZf?si=461c30a65a024bbf \" > <h5> SUPERNOVA: VOY CON TODO (RALPHIE CHOO) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/67czNq5aLXoneoaPuy9utY?si=fdd2a2bdf6aa43c3 \" > <h5>LA FÉ QUE ME TENGAS: THO (MVRK ft.SNEAKY WH) </h5> </a>" ],
        ["nombre"=>"CameronGarcía", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/6pnzUCBMwMT5rvx6PyhusZ?si=281f285498b5450b \" > <h5> LA OSCURIDAD: TRISTE (BRYANT MYERS ft.BAD BUNNY) </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/5q7SJsMuoBBkqORY04yUdL?si=be5a2f67be7f4b4e\" > <h5> DESTINO 2014: GRISELDA (RAUL CLYDE ft.JOWELL) </h5> </a>", "cancion3"=>"<a href= \"https://open.spotify.com/intl-es/track/2Q2quNFAvMTbLSpWqjWH6L?si=cf188382aae14fd0\" > <h5> HOPEFULLY I'M DOING WELL: TOP CHEFF (BENY JR)</h5> </a>" ],
        ["nombre"=>"JoséLorenzo", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/0NFcUhw2uKzX0zqH81tWOu?si=3b30c379da4e4f70 \" > <h5> LA ROSA DE LOS VIENTOS: EL LÍMITE (LA FRONTERA) </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/5zjdZ41WqxECGjrat4MDIK?si=538146a46fbc4d78 \" > <h5>LA VIDA MATA: SEPTIEMBRE (LOS ENEMIGOS) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/3dP0pLbg9OfVwssDjp9aT0?si=0be67a6910d54656 \" > <h5> SATISFIED: HAMILTON (RENÉE ELISE GOLDSBERRY) </h5> </a>" ],
        ["nombre"=>"PabloMartín", "cancion1"=>"<a href =\" https://open.spotify.com/intl-es/track/2p8IUWQDrpjuFltbdgLOag?si=edaec8c372a14b0b \" > <h5> AFTER HOURS: AFTER HOURS (THE WEEKND) </h5> </a>", "cancion2"=>"<a href =\" https://open.spotify.com/intl-es/track/2vXKRlJBXyOcvZYTdNeckS?si=ddde680b56934047 \" > <h5> HYPERION: LOST IN THE FIRE (GESAFFELSTEIN ft.THE WEEKND) </h5> </a>", "cancion3"=>"<a href= \" https://open.spotify.com/intl-es/track/0zo4aX57COch7Wh3NRImTM?si=ec72308c260c4f82 \" > <h5> CAMP (DELUXE EDITION): HEARTBEAT (CHILDISH GAMBINO)    </h5> </a>" ],
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
                
                $numeroArtista = random_int(0, $totalArtistas);
            } while (in_array($numeroArtista, $indicesUsados));
           
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
                    <div class="image-card">
                        <div class="usuario-card">
                            <h4><?php echo $usuario["nombre"]?></h4>
                            <?php echo $usuario["cancion1"]."<br>".$usuario["cancion2"]."<br>".$usuario["cancion3"] ?>
                        </div>
                    </div>
            <?php
                }else{
            ?>
                    <div class="image-card usuario" >
                        <img src="Imagenes/Mix/FotoUsuario.png" alt="">
                        <a href="paginasDerivadas/login.php"> <p>INICIAR SESION</p> </a>
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

        <?php
            if (isset($_SESSION['nombre'])) {
        ?>
                <form action="paginasDerivadas/recomendacionesUsuario.php" method="GET" >
                    <button class="botonRecomendaciones" type="submit" name="accion" value="misRecomendaciones">TUS RECOMENDACIONES</button>
                </form>

        <?php 
            }else {
        ?>
                <form action="" method="GET" >
                    <button class="botonRecomendaciones" type="submit" name="accion" value="misRecomendaciones">TUS RECOMENDACIONES</button>
                </form>
        <?php
                    
            }
        ?>

        <form action="paginasDerivadas/login.php" method="post" >
            <button class="botonLogin" type="submit" name="accion" value="login">LOG-IN</button>
        </form>
    </div>
       
        
</body>
</html>



