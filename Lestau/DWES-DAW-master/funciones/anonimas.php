<html>
 <head>
  <title>Página principal DWES-2DAW</title>
  <meta charset="UTF-8" />
 </head>
 <body>
<?php
$profes = array(array("NRP" => "1111",
					  "Nombre" => "Paco",
					  "Apellidos" => "Jiménez Pérez",
					  "Telefono" => "958112233",
					  "FNac" => "1999-12-31"),
				array("NRP" => "222",
					  "Nombre" => "Luis",
					  "Apellidos" => "Rodríguez López",
					  "Telefono" => "958445566",
					  "FNac" => "1999-01-01"),
				array("NRP" => "333",
					  "Nombre" => "Paco",
					  "Apellidos" => "Pérez Ruiz",
					  "Telefono" => "958778899",
					  "FNac" => "1980-06-06"));
function NRP($p){
	$nrp=array();
	foreach($p as $clave => $valor)
		array_push($nrp,$valor["NRP"]);
	return $nrp;
}
$NRP = function($p){
	$nrp=array();
	foreach($p as $clave => $valor)
		array_push($nrp,$valor["NRP"]);
	return $nrp;
};

$lista = array_map($NRP, $profes);

//echo implode(" ", $lista);
?>
 </body>
</html>
