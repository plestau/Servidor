<?php
include_once "recetaPDF.php";

$r = new recetaPDF($_GET["preparacion"]);
$r->AddPage();
$r->crearCarta($_GET["destinatario"],$_GET["comensales"]);
$r->AddPage();
$r->crearIngredientes($_GET["cantidad"],$_GET["unidad"],$_GET["nombre"],$_GET["comensales"]);
$r->crearPreparacion($_GET["preparacion"]);
$r->Output();
?>