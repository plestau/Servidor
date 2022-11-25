<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.15</title>
</head>
<body>
<?php
echo "<center>";
echo "<h1> Tabla de los 20 primeros números en decimal, binario, octal y hexadecimal </h1>";
echo "<table border=1>";  
echo "<tr>";
echo "<th>Decimal</th>"; 
echo "<th>Binario</th>";
echo "<th>Octal</th>";
echo "<th>Hexadecimal</th>";
echo "</tr>";

// Leemos el array
for($n = 0; $n<=20; $n++){
    // Mostramos los datos de la tabla
    echo '<tr>';
    echo '<td>' . $n .'</td>';
    echo '<td>' . decbin($n) .'</td>';
    echo '<td>' . decoct($n) .'</td>';
    echo '<td>' . dechex($n) .'</td>';
    echo '</tr>'; 
}
echo "</table>";
echo "</center>";
?>
</body>
</html>