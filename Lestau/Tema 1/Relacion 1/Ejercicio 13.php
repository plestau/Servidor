<html>
    <head>
        <title>
            Ejercicio 1.13
        </title>
        <meta charset="UTF-8" />
    </head>
    <body>
<?php
$tirada1 = rand(1, 6);
$tirada2 = rand(1, 6);
if ($tirada1 == $tirada2){
    echo "Tirada 1: " . $tirada1 . "</br>";
    echo "Tirada 2: " . $tirada2 . "</br>";
    echo "Las tiradas son idénticas, un " . $tirada1;
}
elseif($tirada1 > $tirada2){
    echo "Tirada 1: " . $tirada1 . "</br>";
    echo "Tirada 2: " . $tirada2 . "</br>";
    echo "La tirada más alta es la tirada 1 con un " . $tirada1;
}
elseif($tirada2 > $tirada1){
    echo "Tirada 1: " . $tirada1 . "</br>";
    echo "Tirada 2: " . $tirada2 . "</br>";
    echo "La tirada más alta es la tirada 2 con un " . $tirada2;
}
?>
    </body>
</html>