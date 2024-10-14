<?php

        function test_input($productos) {
            $productos = trim($productos);
            $productos = stripslashes($productos);
            $productos = htmlspecialchars($productos);
            return $productos;
        }
        
        $username=$password=$city=$server=$role=$nameErr=$singon="";
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (empty($_POST["username"])) {
                $nameErr = "The username is required";
            }else{
                $username = test_input($_POST["username"]);
            }

            if (empty($_POST["password"])) {
                $nameErr = "The password is required";
            }else{
                $password = test_input($_POST["password"]);
            }

            if (empty($_POST["city"])) {
                $nameErr = "The city is required";
            }else{
                $city = test_input($_POST["city"]);
            }


            if (empty($_POST["server"] || $_POST["server"] == "default")) {
                $nameErr = "You must indicate a web server";
            }else{
                $server = test_input($_POST["server"]);
            }

            if (empty($_POST["role"])) {
                $nameErr = "The role selection is required";
            }else{
                $role = test_input($_POST["role"]);
            }

            $singon = test_input($_POST["signon"]);
            
            echo "<h4>Datos Introducidos:</> <br>";

            echo "Username: ".$username.".<br>";
            echo "Password: ".$password.".<br>";
            echo "City: ".$city.".<br>";
            echo "Server selected: ".$server.".<br>";
            echo "Role: ".$role.".<br>";
            echo "Sign on selection: ".$singon.".<br>";
            
        }else{
?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <style>
                    .error{color: #FF0000;}
                </style>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>task2_8</title>
            </head>
            <body>
                
                <h1 >NOVELL SERVICES LOGIN</h1>

                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <label for="username">Username: </label>
                    <input type="text" id="username" name="username" value="<?php echo $username;?>">
                    <span class="error"> <?php echo $nameErr;?> </span>
                    <br><br>

                    <label for="password">Password: </label>
                    <input type="password" id="password" name="password" value="<?php echo $password;?>">
                    <span class="error"> <?php echo $nameErr;?> </span>
                    <br><br>

                    <label for="city">City of Employment: </label>
                    <input type="text" id="city" name="city" value="<?php echo $city;?>">
                    <span class="error"> <?php echo $nameErr;?> </span>
                    <br><br>

                    <label for="webServer">Web server: </label>
                    <select name="server" id="webServer">
                        <option value=""> -- Choose a server -- </option>
                        <option value="apache" <?php if (isset($server) && $server == "apache") echo "selected"; ?> >Apache</option>
                        <option value="nginx" <?php if (isset($server) && $server == "nginx") echo "selected"; ?> >Nginx</option>
                        <option value="litespeed" <?php if (isset($server) && $server == "litespeed") echo "selected"; ?> >LiteSpeed</option>
                    </select>
                    <br><br>

                    <label for="idRole">Pleas specify your role: </label><br>
                        <input type="radio" id="idRole" name="role" value="Administrator" <?php if(isset($role) && $role == "1") echo "checked"; ?> >Admin <br>
                        <input type="radio" id="idRole" name="role" value="Engineer" <?php if(isset($role) && $role == "2") echo "checked"; ?> >Engineer <br>
                        <input type="radio" id="idRole" name="role" value="Manager" <?php if(isset($role) && $role == "3") echo "checked"; ?> >Manager <br>
                        <input type="radio" id="idRole" name="role" value="Guest" <?php if(isset($role) && $role == "4") echo "checked"; ?> >Guest <br>
                    <br><br>

                    <label for="signon">Single sign on one of the following options: </label><br>
                        <input type="checkbox" id="signon" name="signon" value="Mail" <?php if(isset($singon) && $singon == "mail") echo "checked"; ?> >Mail <br>
                        <input type="checkbox" id="signon" name="signon" value="Payroll" <?php if(isset($singon) && $singon == "payroll") echo "checked"; ?> >Payroll <br>
                        <input type="checkbox" id="signon" name="signon" value="Self Service" <?php if(isset($singon) && $singon == "selfService") echo "checked"; ?> >Self-service <br>

                    <br><br><br>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
                
            </body>
            </html>
    <?php
        }
    ?>