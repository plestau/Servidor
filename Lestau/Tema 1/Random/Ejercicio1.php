<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Práctico</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
<?php
// Crear un programa que ingresando un número, nos de sus primeros 10 múltiplos
    define ("num", 3, false);
    echo "<h1>Tabla del " . num . "</h1>";
    for($i=0;$i<=10;$i++)
    echo num . " x " . $i . " = " . num*$i . "<br>";

// Crear un programa igual pero que inserte los datos en una tabla
    define ("numero", 3, false);
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<td align=\center\" colspan=\"2\">tabla del " . numero . "</td>";
    echo "</tr>";
    for($i=0;$i<=10;$i++){
        echo "<tr>";
        echo "<td align=\"center\">" . num . " x " . $i;
        echo "<td align =\"center\">" . num*$i . "</td>";
        echo "</tr>";
    }
    echo "</table>";

// Crear un programa que calcule la suma de dos parámetros
    function sumas($a, $b){
        return $a + $b;
    }

?>
</body>
</html>