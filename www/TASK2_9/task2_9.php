<?php
    
    $nameErr=$subject=$username="";


    function test_input($productos) {
        $productos = trim($productos);
        $productos = stripslashes($productos);
        $productos = htmlspecialchars($productos);
        return $productos;
    }

        $subjects = ["-","Java Programming","Web Design","Dockers Administration","Django Framework","Mongo Database",];
        
        function createSelectSubjects(array $subjects){
            ?>
                <h4>Subject to enroll: 
                    <select id="subject" name="subject">
                        <?php
                            $rows = count($subjects);

                            for ($i = 0; $i < $rows; $i++) {
                        ?>
                            <option value="<?php echo $i ?>"><?php echo $subjects[$i]?></option>
                        <?php
                            }
                        ?>
                    </select>
                </h4>
        <?php
        }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = test_input($_POST["username"]);
        $subject = test_input($_POST["subject"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
        .error{color: #FF0000;}
        
        div{
            border: 1px solid black;
            width: 500px;
            height: 300px;
        }

        h1{
            text-align: center;
        }

        label{
            padding: 5px;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2_9</title>
</head>
<body>
    <div>
        <h1>First Practice Using Forms.</h1><br>

        <form action="manage.php" method="post">
            <label for="username">Username: </label>
                <input type="text" id="username" name="username" value="<?php echo $username;?>">
                <br><br>

            <label for="subject"><?php createSelectSubjects($subjects);?></label><br><br>
            <input type="submit" value="Send data">
        </form>
    </div>
</body>
</html>