<?php
require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;


$html2pdf = new Html2Pdf();

/* Ejemplo poniendo el html en el propio archivo
$html = "<h1>Ejemplo 1: Composer</h1>";
$html .= "<p>Este es un ejemplo de HTML2PDF usando la librería Composer.</p>";
*/

// Ejemplo usando el html de otro archivo php o html
ob_start();
$archivo = 'pdf_para_generar.php';
require_once $archivo;
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');
?>
