<?php
include_once "claseReceta.php";

$r = new recetaPDF();
$r -> AddPage();
$r -> crearCarta($_GET["correo"], $_GET["comensales"]);
$r -> addPage();
$r -> crearIngredientes($_GET["cantidad"], $_GET["unidad"], $_GET["nombre"]);
$r -> crearPreparacion($_GET["preparacion"]);
$r -> Output();
?>