<html>
 <head>
  <title>Ejercicio de formularios</title>
  <meta charset="UTF-8" />
 </head>
 <body bgcolor="#00A9F8">
<?php
if(!isset($_GET["dato1"]))
{
?>
	<form action="" method="GET">
		<label>Dime algo: </label>
		<!--Campo de texto-->
		<input type="text" name="dato1" />
		<!--Botones de radio-->
		<br />
		<input type="radio" value=1 name="botonRadio1" />
		<label>Opción 1</label>
		<br />
		<input type="radio" value=2 name="botonRadio1" />
		<label>Opción 2</label>
		<br />
		<input type="radio" value=3 name="botonRadio1" />
		<label>Opción 3</label>
		<br />
		<!--Select o menú desplegable-->
		<select name="menu1">
			<option value="A">Opción primera</option>
			<option value="B">Opción segunda</option>
			<option value="C">Opción tercera</option>
			<option value="D">Opción cuarta</option>
		</select>
		<br />
		<!--Casilla de verificación 1-->
		<input type="checkbox" value="Casilla 1" name="c1" />
		<label>Cosa 1</label>
		<br />
		<input type="checkbox" value="Casilla 2" name="c2" />
		<label>Cosa 2</label>
		<br />
		<!--Casilla de verificación 2-->
		<input type="checkbox" value="Casilla 1. Ej2" name="c3[]" />
		<label>Cosa 3</label>
		<br />
		<input type="checkbox" value="Casilla 2. Ej2" name="c3[]" />
		<label>Cosa 4</label>
		<br />
		<!--Select múltiple-->
		<select name="menu2[]" multiple size=6>
			<option value="AAA">Opción 1</option>
			<option value="BBB">Opción 2</option>
			<option value="CCC">Opción 3</option>
			<option value="DDD">Opción 4</option>
			<option value="EEE">Opción 5</option>
			<option value="FFF">Opción 6</option>
		</select>
		<!--File-->
		<br />
		<input type="file" name="archivo" />
		<br /><br />
		<input type="submit" value="Vamos al lio" />
		<input type="reset" value="limpiar" />
	</form>
<?php
}else{
	echo "<h1>Recepción del formulario</h1>";
	foreach($_GET as $clave => $valor){
		if($clave == "c3"){
			foreach($valor as $clave2 => $valor2)
				echo "El elemento <b>$clave2 de c3</b> tiene <b>$valor2</b> <br />";
		}
		elseif($clave == "menu2"){
			foreach($valor as $clave3 => $valor3)
				echo "El elemento <b>$clave3 de menu2</b> tiene <b>$valor3</b> <br />";
		}
		else
			echo "El elemento <b>$clave</b> tiene <b>$valor</b> <br />";
	}
}
?>
 </body>
</html>