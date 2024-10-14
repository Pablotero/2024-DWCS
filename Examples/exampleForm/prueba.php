<html>
    <body>
    
        <?php

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>
                <form action="prueba.php" method="GET">
			    Name: <input type="text" require name="vNome" /><br />
			    E-mail: <input type="text" name="vEmail" /><br />
			    <input type="submit" />

        
    </body>
</html>