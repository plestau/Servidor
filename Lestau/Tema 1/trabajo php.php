<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Trabajo tabla</title>
</head>
<body bgcolor="#00A9F8">
<?php
echo "<center>";
echo "<h1>Boletín de Notas</h1>";

// Incluimos el otro archivo con las medias y los datos de la tabla
include("resultados.php");

// Mostramos los índices de la tabla
echo "<table border=1 bordercolor=#96D4D4>";  
echo "<tr>";
echo "<th>Asignatura</th>"; 
echo "<th>Trimestre 1</th>";
echo "<th>Trimestre 2</th>";
echo "<th>Trimestre 3</th>";
echo "<th>Media</th>";
echo "</tr>";
$n = 0;

// Leemos el array
foreach ($tabla as $nota) {
    // Mostramos los datos de la tabla
    echo '<tr>';
    echo '<td>' . $nota[0] .'</td>';
    echo '<td>' . $nota[1] .'</td>';
    echo '<td>' . $nota[2] .'</td>';
    echo '<td>' . $nota[3] .'</td>';
    printf('<td>' . $media[$n] . '</td>');
    echo '</tr>';
    $n++;
}
echo "</table>";

// Mostramos la media total, redondeada
$mediatotal = round(array_sum($media)/count($media),1);
printf('<b><p>La media total es '. $mediatotal .'</p></b>');
echo "</center>";

?>
</body>
</html>