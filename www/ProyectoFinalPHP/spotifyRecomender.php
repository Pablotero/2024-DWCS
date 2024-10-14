<?php
    $artistas = [
        0 => ["nombre"=>"RAUW ALEJANDRO", "imagen"=>"Imagenes/Rauw/Rauw.jpeg", "pagina"=>"rauw.php"]
        1 => ["nombre"=>"MORA", "imagen"=>"Imagenes/Mora/Mora.jpeg", "pagina"=>"mora.php"]
        2 => ["nombre"=>"NSQK", "imagen"=>"Imagenes/NSQK/nsqk.jpeg", "pagina"=>"rauw.php"]
        3 => ["nombre"=>"ALVARO DÏAZ", "imagen"=>"Imagenes/AlvaroDiaz/AlvaroDiaz.jpeg", "pagina"=>"alvaroDiaz.php"]
        4 => ["nombre"=>"FEID", "imagen"=>"Imagenes/Feid/Feid.jpeg", "pagina"=>"feid.php"]
        5 => ["nombre"=>"BAD BUNNY", "imagen"=>"Imagenes/BadBunny/BaduBunny.jpeg", "pagina"=>"badBunny.php"]
        6 => ["nombre"=>"MYKE TOWERS", "imagen"=>"Imagenes/MykeTowers/MykeTowers.jpeg", "pagina"=>"mykeTowers.php"]
        7 => ["nombre"=>"JHAYCO", "imagen"=>"Imagenes/Jhayco/Jhayco.jpeg", "pagina"=>"jhayco.php"]
    ]

    $mix = [
        0 => ["usuario"=>"PabloOtero", "cancion1"=>"<a href \" https://open.spotify.com/intl-es/track/3Bp0XlRQv0URQMM6ABKhEE?si=6ed95c0d4dda4f11 \" > <p> DATA: VOLVER </p </a>", "cancion2"=>"<a href \" https://open.spotify.com/intl-es/track/73g6RENTgyeOn8vD04F2MT?si=ca7b44606bf14837 \" > <p> ATT. : NO QUIERO PELEAR (YOUNG MIKO ft. ELENA ROSE) </p </a>", "cancion3"=>"<a href \" https://open.spotify.com/intl-es/track/6LgZURTxqvwE5c6i5Wxe0g?si=3f64a868e2e44bb7 \" > <p> EL NIÑO DE LOS CORAZONES ROTOS: POEMA A TUS PRONLEMAS (LEGALLY) </p </a>" ]
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
        $numeroArtista = random_int(0,7);
    ?>
    <div class="container">
        <div class="row">
            <div class="image-card">
                <?php
                    $artistas[$numeroArtista] as $artsitaSeleccionado => $valuesArtista;
                ?>
                <img src="<?php $valuesArtista["imagen"] ?>" alt="">
                <a href="<?php $valuesArtista["pagina"] ?>"> <p> <?php $valuesArtista["nombre"] ?> </p> </a>
            </div>
            <div class="image-card">
                <img src="Imagenes/MykeTowers/MykeTowers.jpeg" alt="">
                <a href=""><p>RAUW ALEJANDRO</p></a>
            </div>
            <div class="image-card">
                <img src="Imagenes/NSQK/nsqk.jpeg" alt="">
                <a href=""><p>RAUW ALEJANDRO</p></a>
            </div>
        </div>
        <div class="row">
            <div class="image-card">
                <img src="Imagenes/Mora/Mora.jpeg" alt="">
                <a href=""><p>RAUW ALEJANDRO</p></a>
            </div>
            
        <!-- DIV DEDICADO AL USUSARIO Y LOGIN -->
            <div class="image-card">
                <?php
                    if () {
                        $mix[$numeroArtista] as $mixSeleccionado => $valuesMix;

                        echo("<h4".$valuesMix["usuario"]."</h4> <br> ".$valuesMix["cancion1"]."<br>".$valuesMix["cancion2"]."<br>".$valuesMix["cancion3"])

                    }else{
                ?>
                        <img src="Imagenes/Mix/FotoUsuario.png" alt="">
                <?php
                    }
                ?>
            </div>


            <div class="image-card">
                <img src="Imagenes/Jhayco/Jhayco.jpeg" alt="">
                <a href=""><p>RAUW ALEJANDRO</p></a>
            </div>
        </div>
    </div>
    <div class="buttons">
        <button>Botón 1</button>
        <button>Botón 2</button>
    </div>
</body>
</html>



<!--       <img src="Imagenes/Rauw/Rauw.jpeg" alt="">
        <img src="Imagenes/MykeTowers/MykeTowers.jpeg" alt="">
        <img src="Imagenes/NSQK/nsqk.jpeg" alt="">
        <img src="Imagenes/Mora/Mora.jpeg" alt="">
        <img src="Imagenes/Mix/FotoUsuario.png" alt="">
        <img src="Imagenes/Jhayco/Jhayco.jpeg" alt="">