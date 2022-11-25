<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array2</title>
</head>
<body>
<?php
    $personas = array("11111111A" => "Pepillo el de los palotes",
    "22222222B" => "Juana de Arco",
    "33333333C" => "Miguel de Cervantes");
    foreach($personas as $nombre)
        echo $nombre . " " . "<br>";
        echo "-------------------------------------------- <br>";
        foreach($personas as $dni => $nombre)
            echo $dni . ": " . $nombre . "<br>";
?>
</body>
</html>