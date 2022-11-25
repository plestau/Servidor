<html>
 <head>
  <title>Funciones como argumentos</title>
  <meta charset="UTF-8" />
 </head>
 <body bgcolor="#00A9F8">
<?php
$coches = array("1111AAA" => array("Marca" => "Ford",
								   "Modelo" => "Focus",
								   "Color" => "Amarillo",
								   "Puertas" => 5),
				"2222BBB" => array("Marca" => "Ford",
								   "Modelo" => "Fiesta",
								   "Color" => "Rojo",
								   "Puertas" => 5),
				"3333CCC" => array("Marca" => "Seat",
								   "Modelo" => "León",
								   "Color" => "Amarillo",
								   "Puertas" => 3),
				"4444DDD" => array("Marca" => "Renault",
								   "Modelo" => "Clio",
								   "Color" => "Verde",
								   "Puertas" => 5));
	
	//Esta función devuelve en número de coches que hay en $arr
	//cuya característica dada en $campo (Marca, Modelo, Color, Puertas)
	//Coincida con el dato de $valor
	//VALOR DEVUELTO: integer
	function cuentaCoches($arr,$campo,$valor,$funcion){
		$coches = 0;
		foreach($arr as $mat => $datos){
			//Llamada a la función del argumento
			if($funcion($arr,$mat,$campo,$valor))
				$coches++;
		}
		return $coches;
	}
	//Esta función devuelve true si el coche con $matricula del array $arr
	//tiene como valor de $campo el especificado en $valor
	//VALOR DEVUELTO: bool
	function buscaCoche($arr,$matricula,$campo,$valor){
		foreach($arr[$matricula] as $c => $v){
			if(strtolower($c) == strtolower($campo)){
				if(gettype($v) == "string"){
					if(strtolower($v) == strtolower($valor)){
						return true;
					}
				}elseif(gettype($v) == "integer"){
					if($v == $valor){
						return true;
					}
				}
			}
		}
		return false;
	}
	function buscaCoche2($arr,$matricula,$campos,$valores){
		$coincidencias=0;
		$indice = 0;
		foreach($campos as $campo){
			foreach($arr[$matricula] as $c => $v){
				if(strtolower($c) == strtolower($campo)){
					if(gettype($v) == "string"){
						if(strtolower($v) == strtolower($valores[$indice])){
							$coincidencias++;
						}
					}elseif(gettype($v) == "integer"){
						if($v == $valores[$indice]){
							$coincidencias++;
						}
					}
				}
			}
			$indice++;
		}
		return (($coincidencias == count($campos))?true:false);
	}
	//EJEMPLOS
	//¿Cuantos coches hay de la marca Ford?
	echo cuentaCoches($coches,"MARCA","FORd","buscaCoche") . "<br>";
	//¿Cuántos coches hay de 5 puertas?
	echo cuentaCoches($coches,"PueRTAS",5,"buscaCoche") . "<br>";
	//¿Cuantos coches hay de la marca Ford con 5 puertas?
	$criterios = array("Marca","PuErTaS");
	$datos = array("FOrd",5);
	echo cuentaCoches($coches,$criterios,$datos,"buscaCoche2") . "<br>";
	//¿Cuantos coches hay de Amarillos con 3 puertas?
	$criterios = array("Color","PuErTaS");
	$datos = array("amarillo",5);
	echo cuentaCoches($coches,$criterios,$datos,"buscaCoche2") . "<br>";
	//¿Cuantos coches hay de la marca Ford, Amarillos y con 3 puertas?
	$criterios = array("Marca","Color","PuErTaS");
	$datos = array("Ford","amarillo",3);
	echo cuentaCoches($coches,$criterios,$datos,"buscaCoche2") . "<br>";
?>
 </body>
</html>