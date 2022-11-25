<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Comentario
/* Comentario 
multilínea*/

    echo "<h2>Hola mundo</h2>";
    $nombre = "Pepillo";
    echo "Hola " . $nombre;
    echo "\nHola $nombre";
    if (isset($nombre)){
        echo "La variable nombre EXISTE";
    }else{
        echo "La variable nombre NO EXISTE";
    }
    echo "Hola " . $nombre;
    $nombre = 1.5;
    echo "Hola " . $nombre;
    $a = 2;


    //bucle for
    for($i=0;$i<10;$i++){
        echo $i;
    }
?>
<p style="color:<?php echo "red";?>">Cosa </p>
</body>
</html>