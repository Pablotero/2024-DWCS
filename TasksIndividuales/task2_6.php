<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2_6</title>
</head>
<body>
    <?php
        $productos = [
            "cocacola" => ["text"=>"Coca Cola", "precio"=>2.1],
            "pepsicola" => ["text"=>"Pepsi Cola", "precio"=>2],
            "fantanranja" => ["text"=>"Fanta Naranja", "precio"=>2.5],
            "trimanzana" => ["text"=>" Trina Manzana", "precio"=>2.3],
        ];


        function createaSelect(array $productos){
         ?>
            <h1> Task 3.6 - Generate a Select Dinamically</h1>
            <select name='opcion'>
        
        <?php
            foreach ($productos as $claveValorSelect => $value) {
                echo("<option value='".$claveValorSelect."'>".$value['text']." (".$value['precio']."€)"."</option>");    
            }
        ?>
            </select>
        <?php
            }
            createaSelect($productos);
        ?>
        
</body>
</html>
