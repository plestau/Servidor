<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.11</title>
</head>
<body>
<?php
for ($i=1;$i<=10;$i++){
    echo "<h1>La tabla del ", $i, "</h1></br>";
    echo "</br>";
    for ($j=0;$j<=10;$j++){
        echo "<a>", $j, " x ", $i, " = ", ($j*$i), "</a></br>";
    }
    echo"</br>";
}
?>
</body>
</html>
