<?php
    $username=$subject=$nameErr=$lectureType="";
    $username=$_POST["username"];
    $subjects = ["Sin seleccionar","Java Programming","Web Design","Dockers Administration","Django Framework","Mongo Database",];
    if(isset($_POST["lectureType"])){
        $lectureType=$_POST["lectureType"];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5><?php echo $username ?> wants to enrroll in: <?php echo $subjects[$_POST["subject"]]?> in <?php if ($lectureType != "") {
      echo $lectureType;
    }else{
        echo "";
    } ?> classes.</h5>
    <a href="manage2.php">Third page</a>

</body>
</html>