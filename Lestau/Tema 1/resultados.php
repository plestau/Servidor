<?php
// Guardamos los nombres y las notas de las asignaturas en un array de dos dimensiones
$tabla = array(
    array("Matemáticas", 3, 10, 7),
    array("Lengua", 8, 5, 3),
    array("Física", 7, 2, 1),
    array("Latín", 4, 7, 8),
    array("Inglés", 6, 2, 3));

// Guardamos la operación que calcula la media y redondeamos a 1 decimal
$media = array(round(array_sum($tabla[0])/(count($tabla[0])-1), 1),
round(array_sum($tabla[1])/(count($tabla[1])-1), 1),
round(array_sum($tabla[2])/(count($tabla[2])-1), 1),
round(array_sum($tabla[3])/(count($tabla[3])-1), 1),
round(array_sum($tabla[4])/(count($tabla[4])-1), 1));
?>