<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
<?php
    $vector[0] = "cosa";
    $vector["nombre"] = "Pepillo";
    foreach($vector as $indice => $valor){
        echo "La posición $indice contiene: $valor <br>";
    }
    // Array tradicional
    $vector2[0] = 1;
    $vector2[1] = 2;
    $vector2[2] = 3;
    $vector2[3] = 4;

    for ($i=0;$i<4;$i++)
        echo $vector2[$i] . "<br>";

?>
</body>
</html>