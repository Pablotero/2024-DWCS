<?php declare(strict_tyoe=1);
    function potencia(int $base, int $potencia) : int{

        $resultado = $base;

        if ($potencia == 0) {
            $resultado = 1;
        }else{
            for ($i = $potencia; $i > 1; $i--) { 
                $resultado = $resultado * $base; 
            }
        }

        return $resultado;
    }    
?>

<html>
    <head>
        <meta charset="utf 8">
        <body>
            <?php
                $potencia = 3;
                $base = 2;
                try {
                    echo $base." elevado a  ".$potencia." es: ".potencia($base, $potencia);
                } catch (Exception $exceptionMensaje) {
                    echo $exceptionMensaje->getMessage();
                }
                
            ?>
        </body>
    </head>
</html>