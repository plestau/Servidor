<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador+</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="numero" value=1 min=0 max=1>
        <input type="submit" name="enviar" value="Enviar">
    </form>
<?php
    session_start();
    if(!isset($_SESSION["contador"])){
        $_SESSION["contador"] = 0;
    }   
    if(isset($_SESSION["contador"])){
        if($_GET["numero"] == 1){
            $_SESSION["contador"]++;
        }
        if($_GET["numero"] == 0){
            $_SESSION["contador"]--;
        }
        echo "Has visitado la página " . $_SESSION["contador"] . " veces";
    }
?>
</body>
</html>