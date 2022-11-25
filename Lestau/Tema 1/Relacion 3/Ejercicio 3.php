<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3.3</title>
</head>
<body>
<?php
$array = array();
for ($x = 0; $x <=10; $x++){
    $array_fix = array_unshift($array, rand(0, 1));
    echo $array_fix;
}
for ($x = 0; $x <=10; $x++){
    
}

?>
</body>
</html>