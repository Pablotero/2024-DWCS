<?php
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
        0 => ["nombre"=>"PabloOtero", "cancion1"=>"<a href \" https://open.spotify.com/intl-es/track/3Bp0XlRQv0URQMM6ABKhEE?si=6ed95c0d4dda4f11 \" > <p> DATA: VOLVER </p </a>", "cancion2"=>"<a href \" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <p> ATT. : NO QUIERO PELEAR (YOUNG MIKO ft. ELENA ROSE) </p </a>", "cancion3"=>"<a href \" https://open.spotify.com/intl-es/track/6LgZURTxqvwE5c6i5Wxe0g?si=3f64a868e2e44bb7 \" > <p> EL NIÑO DE LOS CORAZONES ROTOS: POEMA A TUS PRONLEMAS (LEGALLY) </p </a>" ]
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
                if (isset($_SESSION)) {

                    $usuario = $usuarios[random_int(0, count($usuarios) - 1)]
            ?>
                    <div class="image-card">
                        <h4><?php echo $usuario["nombre"]?></h4>
                        <?php echo $usuario["cancion1"].$usuario["cancion2"].$usuario["cancion3"] ?>
                    </div>
            <?php
                }else{
            ?>
                    <div class="image-card">
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
        <form action="recomendacionesUsuario.php" method="POST" >
            <button class="botonRecomendaciones" type="submit" name="accion" value="misRecomendaciones">MIS RECOMENDACIONES</button>
        </form>
        <form action="" method="post" >
            <button class="botonLogin" type="submit" name="accion" value="login">LOG-IN</button>
        </form>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            session_start();
    ?>
            <div class="formLogin">
                <form action="">
                    <?php  session_name()?>
                    Usuario: <input type="text">
                    Contraseña: <input type="password">
                </form>
            </div>
    <?php
        }
    ?>
</body>
</html>



<!--
version: "3.1"
services:
    db:
        image: mysql
        ports: 
            - "3306:3306"
        command: --default-authentication-plugin=mysql_native_password
        environment:
            MYSQL_DATABASE: dbname
            MYSQL_USER: root
            MYSQL_PASSWORD: test
            MYSQL_ROOT_PASSWORD: test 
        volumes:
            - ./dump:/docker-entrypoint-initdb.d
            - ./conf:/etc/mysql/conf.d
            - persistent:/var/lib/mysql
        networks:
            - default
    www:
        build: .
        ports: 
            - "80:80"
        volumes:
            - ./www:/var/www/html
        links:
            - db
        networks:
            - default
    phpmyadmin:
        image: phpmyadmin/phpmyadmin
        links: 
            - db:db
        ports:
            - 8000:80
        environment:
            MYSQL_USER: root
            MYSQL_PASSWORD: test
            MYSQL_ROOT_PASSWORD: test 
volumes:
    persistent:

