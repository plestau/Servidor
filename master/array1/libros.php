<html>
 <head>
  <title>Ejemplo2 de arrays</title>
  <meta charset="UTF-8" />
 </head>
 <body>
<?php
	$libros = array("0" => array("Cantidad" => 20,
								 "Titulo" => "El siglo de las luces",
								 "Autor" => "Carpentier, Alejo",
								 "Precio" => 12.50),
					"1" => array("Cantidad" => 5,
								 "Titulo" => "Sobre héroes y tumbas",
								 "Autor" => "Sábato, Ernesto",
								 "Precio" => 11),
					"2" => array("Cantidad" => 8,
								 "Titulo" => "El baile de la Victoria",
								 "Autor" => "Skármeta, Antonio",
								 "Precio" => 15),
					"1" => array("Cantidad" => 12,
								 "Titulo" => "Rayuela",
								 "Autor" => "Cortázar, Julio",
								 "Precio" => 11.50),
					"1" => array("Cantidad" => 3,
								 "Titulo" => "Antes del fin",
								 "Autor" => "Sábato, Ernesto",
								 "Precio" => 13));
	echo "<ul>";
	foreach($libros as $i => $datos){
		echo "<li>" . $datos["Titulo"] . "</li>";
		echo "<ul>";
		foreach($datos as $j => $valor)
			if($j != "Titulo")
				echo "<li>$j: $valor</li>";
		echo "</ul>";
	}
?>
 </body>
</html>