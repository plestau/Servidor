<?php
	echo "<h1>Crea aquí tu archivo XML</h1>";
	echo "<br />";
	echo "<b>Consideraciones a tener en cuenta:</b>";
	echo "<ul>";
	echo "<li>Puede no haber profesores asignados a una asignatura. En ese caso no se crea el nodo correspondiente.</li>";
	echo "<li>RECORDATORIO php: Si no hay profes, el array no existe. Que no es lo mismo a que esté vacío. Usa isset.</li>";
	echo "<li>Guarda el fichero en la misma carpeta del script con el nombre <i>asignaturas.xml</i>. Después, lo muestras en el navegador</li>";
	echo "<li><b>Versión 1.0</b>: Crea un archivo XML nuevo por cada ejecución del script.</li>";
	echo "<li><b>Versión 2.0</b>: Ir acumulando asignaturas en el XML cuando se llame al script. Para ello, deberás comprobar si existe el archivo para abrirlo, cargarlo en un objeto simpleXML y añadir la nueva asignatura.</li>";
	echo "</ul>";
	echo "<a href='#' onclick='history.go(-1);'>Ir atrás</a>";
?>