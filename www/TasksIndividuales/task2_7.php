<html>
<head>
<style>
  .error {color: #FF0000;}
</style>
</head>
<body>
<?php

  $productos = [
    "cocacola" => ["text"=>"Coca Cola", "precio"=>2.1],
    "pepsicola" => ["text"=>"Pepsi Cola", "precio"=>2],
    "fantanranja" => ["text"=>"Fanta Naranja", "precio"=>2.5],
    "trimanzana" => ["text"=>" Trina Manzana", "precio"=>2.3],
  ];

  function test_input($productos) {
    $productos = trim($productos);
    $productos = stripslashes($productos);
    $productos = htmlspecialchars($productos);
    return $productos;
  }

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
  ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    
    Producto: <?php createSelect($productos);?>
    <br>Quantity of drinks: <input type="number" name="vQuantity" required >
    <span class="error"> <?php echo $nameErr; ?> </span>

    <input type="submit" name="enviar" value="Send data">
  </form>

</body>
</html>