<html>
 <head>
  <title>Página principal DWES-2DAW</title>
  <meta charset="UTF-8" />
 </head>
 <body>
<?php
	$coches = array("1111AAA" => array("Marca" => "Ford",
									   "Modelo" => "Focus",
									   "Color" => "Blanco",
									   "Puertas" => 5),
					"2222BBB" => array("Marca" => "Renault",
									   "Modelo" => "Clio",
									   "Color" => "Verde",
									   "Puertas" => 5),
					"3333CCC" => array("Marca" => "Ford",
									   "Modelo" => "Fiesta",
									   "Color" => "Azul",
									   "Puertas" => 3),
					"4444DDD" => array("Marca" => "Citroen",
									   "Modelo" => "C4",
									   "Color" => "Marrón",
									   "Puertas" => 5));
	
	//La función busca, devuelve true si hay un coche en el array $arr
	//con matrícula $mat cuyo dato especificado en $indice (Marca, Modelo,
	//Color o Puertas sea igual que el especificado en $valor. NO es sensible
	//a mayúsculas
	//VALOR DEVUELTO: true/false
	function busca($arr,$mat,$indice,$valor){
		if(gettype($valor)=="string"){
			return strtolower($valor) === strtolower($arr[$mat][$indice]);
		}elseif(gettype($valor)=="integer"){
			return $valor === $arr[$mat][$indice];
		}
	}
	//La función numCoches devuelve el número de coches que hay en el
	//array $arr cuyo dato especificado en $i (Marca, Modelo,
	//Color o Puertas sea igual que el especificado en $v haciendo uso de
	//una función de búsqueda $b
	//VALOR DEVUELTO: integer
	function numCoches($arr,$i,$v,$b){
		$contador = 0;
		foreach($arr as $clave => $valor){
			$contador += $b($arr,$clave,$i,$v)?1:0;
		}
		return $contador;
	}
	
	//EJEMPLOS. Fijarse que no es sensible a mayúsculas. Ej: FORD == ford
	//1. ¿Cuantos coches hay con 5 puertas?
	echo numCoches($coches,"Puertas",5,"busca") . "<br>";
	//2. ¿Cuantos coches hay de la marca Ford?
	echo numCoches($coches,"Marca","FORD","busca") . "<br>";
	//3. ¿Cuántos coches blancos hay?
	echo numCoches($coches,"Color","blanco","busca") . "<br>";
?>
 </body>
</html>
