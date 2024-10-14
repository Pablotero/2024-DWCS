<?php  
    function tripleCheck(array $numeros = [int]) {
        
    $contadorCheck = 0;
    $numeroanterior = null;


        foreach ($numeros as $numero) {
            
            if ($numero == $numeroanterior) {
                $contadorCheck++;
                echo "Repetido número ".$numero."<br>";
            }elseif ($numero != $numeroanterior) {
                $contadorCheck = 0;
                echo "Reiniciado el contador<br>";
            }
            
            if ($contadorCheck == 2) {
                echo "Repetido 3 veces el mismo numero, saliendo del bucle...";
                break;
            }

            $numeroanterior = $numero;
        }
    }

    function countriesCapitals(array $paisesCapitales){
        foreach ($paisesCapitales as $pais => $capital) {
            echo "<br>The capital of ".$pais." is ".$capital.""; 
        }
    }
?>

<html>
    <head>
        <meta charset="utf 8">
        <body>
            <?php
                $numeros = [1,2,3,4,5,6,1,1,1,2,2];
                $paises = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
                try {
                    tripleCheck($numeros);
                    countriesCapitals($paises);
                } catch (Exception $exceptionMensaje) {
                    echo $exceptionMensaje->getMessage();
                }
                
            ?>
        </body>
    </head>
</html>