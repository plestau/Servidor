<html>
 <head>
  <title>Tarea 1: Notas de alumnos</title>
  <meta charset="UTF-8" />
 </head>
 <body bgcolor="#00A9F8">
  <hr>
  <center><h1>Boletín de notas</h1></center>
  <hr>
<?php
	//Incluyo la librería
	require_once("resultados.php");
	//muestro los datos
	echo "<table border=\"1\" align=\"center\">";
	//1ª fila de la tabla con el encabezado
	echo " <tr>";
	echo "  <td align=\"center\"><b>Asignatura</b></td>";
	echo "  <td align=\"center\"><b>Trimestre 1</b></td>";
	echo "  <td align=\"center\"><b>Trimestre 2</b></td>";
	echo "  <td align=\"center\"><b>Trimestre 3</b></td>";
	echo "  <td align=\"center\"><b>Media</b></td>";
	echo " </tr>";
	//Variable para calcular la media total
	$mediaTotal=0;
	//Recorro el array para mostrar los datos
	foreach($notas as $asignatura=>$resultados){
		echo "<tr>";
		echo "<td align=\"center\">$asignatura</td>";
		//Variable para calcular la media por asignatura
		$media=0;
		foreach($resultados as $trimestre => $nota){
			echo "<td align=\"right\">$nota</td>";
			//Acumulo las notas para calcular la media de cada materia
			$media += $nota;
		}
		printf("<td align=\"right\">%.1f</td>", $media/count($resultados));
		echo "</tr>";
		//Acumulo las medias de cada materia para calcular la media total
		$mediaTotal += $media/count($resultados);
	}
	echo "</table>";
	printf("<center><h2>La media total es %.1f</h2></center>", $mediaTotal/count($notas));
?>
 </body>
</html>