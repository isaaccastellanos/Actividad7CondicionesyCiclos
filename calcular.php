<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>
</head>
<body>
    <h1>Edades</h1>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        if($num1 < $num2){
            echo $num2. " es mayor que ". $num1;
        }elseif($num1 == $num2){
            echo $num2. " es igual que ". $num1;
        }else{
            echo $num1. " es mayor que ". $num2. "<br><br>";
        }
    ?>
</body>
</html>