<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>
<?php
$string = <<<XML
<a>
    <Codigo>111</Codigo>
    <Nombre>Desarrollo web en entorno servidor</Nombre>
    <Duracion>100 Horas </Duracion>
    <Tipo>Troncal</Tipo>
    <Titulares>
        <dni>75847583J</dni>
        <nombre>Pedro</nombre>
        <apellidos>Martinez Pacheco</apellidos>
        <dni>74638593T</dni>
        <nombre>Almudena</nombre>
        <apellidos>Jimenez Paleto</apellidos>
    </Titulares>
    <Prácticas>
        <dni>87637564F</dni>
        <nombre>Alberto</nombre>
        <apellidos>Pérez Reverte</apellidos>
        <dni>78356765R</dni>
        <nombre>Pablo</nombre>
        <apellidos>Jimenez Muñecar</apellidos>
        <dni>98790876C</dni>
        <nombre>Carla</nombre>
        <apellidos>Balbón Lista</apellidos>
    </Prácticas>
</a>
XML;

function escribeXML($xml){
	echo "<ul>";
	foreach($xml as $k=>$v){
		if($v->children()){
			echo "<li>" . $k . " hijos: ". $v->count() . "</li>";
			escribeXML($v);
		}else{
			echo "<li>" . $k . "=" . $v . "</li>";
			
		}
	}
	echo "</ul>";
}

$xml = simplexml_load_string($string);
escribeXML($xml);
?>
</body>
</html>