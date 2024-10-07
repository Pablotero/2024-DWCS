<?php 
    function mostrarDatos(?string $name, $age, string $surname="Apelido") {
        echo $name." ".$surname." is ".$age." years old.";
    }
?>

<html>
    <head>
        <meta charset="utf 8">
        <body>
            <?php

                try {
                    mostrarDatos("Pablo", 19, );
                } catch (Exception $exceptionMensaje) {
                    echo $exceptionMensaje->getMessage();
                }
                
            ?>
        </body>
    </head>
</html>