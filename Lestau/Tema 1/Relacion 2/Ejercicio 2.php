<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.2</title>
</head>
<body>
<?php   
function factorial($n){
    $resultado = 1;
    $i = 1;
    while ($i <= $n){
        $resultado = $resultado * $i;
        $i = $i + 1;
    }
    return $resultado;
}
echo factorial(5);
?>
</body>
</html>