<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.9</title>
</head>
<body>
<?php
    $numero = 2;
    if (primo($numero)){
        echo "Es primo";
    }else{
        echo "No es primo";
    }
    function primo($numero){
        for($x=2;$x<$numero;$x++){
            if(($numero % $x)==0){
                return false;
            }
        }
    }
primo(2);
?>
</body>
</html>