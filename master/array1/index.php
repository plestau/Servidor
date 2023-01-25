<html>
 <head>
  <title>Ejemplo1 de arrays</title>
  <meta charset="UTF-8" />
 </head>
 <body>
<?php
	//Array tipo PHP
	$vector[0] = "cosa";
	$vector["nombre"] = "Pepillo";
	$vector["nota"] = 7.8;
	foreach($vector as $indice => $valor){
		echo "La posicion $indice contiene: $valor <br>";
	}
	//ARRAY TRADICIONAL
	$vector2[0] = 1;
	$vector2[1] = 2;
	$vector2[2] = 3;
	$vector2[3] = 4;
	
	for($i=0;$i<4;$i++)
		echo $vector2[$i] . "<br>";
?>
 </body>
</html>