<?php 
    function factorial(int $numero){

        if ($numero < 0) {
            throw new Exception ("Numero no válido, es menor de 0");
        }else{
            $factorial=1;
            for ($i = $numero; $i > 1; $i--) { 
                $factorial = $factorial * $i;
            }
        }
        
        return $factorial;
    }    
?>

<html>
    <head>
        <meta charset="utf 8">
        <body>
            <?php
                define("NUM",1);
                try {
                    echo "El factorial de ".NUM." es: ".factorial(NUM);
                } catch (Exception $exceptionMensaje) {
                    echo $exceptionMensaje->getMessage();
                }
                
            ?>
        </body>
    </head>
</html>


