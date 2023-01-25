<html>
 <head>
  <title>Ejemplo2 de arrays</title>
  <meta charset="UTF-8" />
 </head>
 <body>
<?php
	$personas = array("11111111A" => "Pepillo el de los palotes",
					  "22222222B" => "Juana de Arco",
					  "33333333B" => "Miguel de Cervantes");
	foreach($personas as $nombre)
		echo $nombre . " ";
	echo "<br>------- <br>";
	foreach($personas as $dni => $nombre)
		echo $dni . ": " . $nombre . "<br>";
?>
 </body>
</html>