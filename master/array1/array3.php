<html>
 <head>
  <title>Ejemplo2 de arrays</title>
  <meta charset="UTF-8" />
 </head>
 <body>
<?php
	$personas = array("11111111A" => array("nombre" => "Pepillo",
										   "telefonos" => array(0 => "999112233",
																1 => "999223344",
																2 => "999334455")),
					  "22222222B" => array("nombre" => "Juana de Arco",
										   "telefonos" => array(0 => "888112233",
																1 => "888223344")),
					  "33333333B" => array("nombre" => "Miguel de Cervantes",
										   "telefonos" => array(0 => "666112233")));
	echo "<ul>";
	foreach($personas as $dni => $datos){
		echo "<li>$dni ". $datos["nombre"] . "</li>";
		echo "<ul>";
		foreach($datos["telefonos"] as $indice => $tlf)
			echo "<li>$tlf</li>";
		echo "</ul>";
	}
?>
 </body>
</html>