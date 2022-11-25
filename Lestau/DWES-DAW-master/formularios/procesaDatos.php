<html>
 <head>
  <title>Recepción de datos del formulario</title>
  <meta charset="UTF-8" />
 </head>
 <body bgcolor="#00A9F8">
<?php
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
?>
 </body>
</html>