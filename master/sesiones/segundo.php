<html>
 <head>
  <title>Ejemplo de sesiones</title>
  <meta charset="UTF-8" />
 </head>
 <body>
 <h1>Estas en Segundo</h1>
 <form action="" method="get"> 
  <label>Dime algo:</label>
  <input type="text" name="cosa3" />
  <input type="submit" value="Enviar" />
 </form>
 <a href="index.php">Ir a Index</a><br />
 <a href="primero.php">Ir a primero</a><br />
 <a href="#">Ir a segundo</a><br />
 <a href="cerrar.php">Cerrar sesión</a>
<?php
	session_start();
	if(isset($_GET["cosa3"])){
		$_SESSION["c3"] = $_GET["cosa3"];
	}
	echo "<h3>Las Variables de sesión que hay ahora son:</h3>";
	foreach($_SESSION as $k => $v)
		echo $k . ": " . $v . "<br />";
?>
 </body>
</html>