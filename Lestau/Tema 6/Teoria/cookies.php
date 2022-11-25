<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Cookies</title>
</head>
<body>
<?php
    if(!isset($_COOKIE['contador'])){
        $tiempo = time()+3600;
        setcookie("contador", 0, $tiempo);
    }
    else // la cookie ya existe
    {
        $valor = $_COOKIE['contador'] + 1;
        setcookie("contador", $valor, time()+3600);
        echo "Contador: " . $_COOKIE['contador'];
    }
?>
</body>
</html>