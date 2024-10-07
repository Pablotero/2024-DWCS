<?php
$username=$lectureType="";
$subjects = ["-","Java Programming","Web Design","Dockers Administration","Django Framework","Mongo Database",];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lectureType = test_input($_POST["lectureType"]);
        $username = test_input($_POST["username"]);
        $subject = test_input($_POST["subject"]);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage 2</title>
</head>
<body>
    <form action="manage.php" method="post">
        <label for="lectureType"></label>
        <input type="radio" id="lectureType" value="inPerson" <?php if(isset($lectureType) && $lectureType == "1") echo "checked";?>>In-person <br>
        <input type="radio" id="lectureType" value="online" <?php if(isset($lectureType) && $lectureType == "2") echo "checked";?>>Online <br> 
        
        <input type="submit" value="Send data">
    </form>
</body>
</html>