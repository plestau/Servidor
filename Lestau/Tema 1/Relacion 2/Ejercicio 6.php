<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.6</title>
</head>
<body>
<?php
function mcd(...$numeros)
{
    if (count($numeros) > 2) {
        return array_reduce($numeros, 'mcd');
    }
 
    $resultado = $numeros[0] % $numeros[1];
    return $resultado === 0 ? abs($numeros[1]) : mcd($numeros[1], $resultado);
}
 
echo "<br>".mcd(12, 24);
echo "<br>".mcd(12, 24, 32);
echo "<br>".mcd(12, 24, 32, 8);
?>
</body>
</html>