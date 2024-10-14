<html>
    <head>
        <title>DWCS</title>
        <meta charset="utf-8">
        <?php
            echo "Vamos a calcular el factorial del número 4:<br>";
            $numero = 4;
            $factorial=1;
            for ($i = $numero; $i > 1; $i--) { 
                $factorial = $factorial * $i;
            }
            echo"El resultado es: ".$factorial;
        ?>
    </head>
</html>

