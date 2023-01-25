<html>
 <head>
  <title>Ejemplo de sesiones</title>
  <meta charset="UTF-8" />
 </head>
 <body>
 <h1>Estas en Index</h1>
 <form action="" method="get"> 
  <label>Dime algo:</label>
  <input type="text" name="cosa1" />
  <input type="submit" value="Enviar" />
 </form>
 <a href="#">Ir a Index</a><br />
 <a href="primero.php">Ir a primero</a><br />
 <a href="segundo.php">Ir a segundo</a><br />
 <a href="cerrar.php">Cerrar sesión</a>
<?php
	session_start();
	if(isset($_GET["cosa1"])){
		$_SESSION["c1"] = $_GET["cosa1"];
	}
	echo "<h3>Las Variables de sesión que hay ahora son:</h3>";
	foreach($_SESSION as $k => $v)
		echo $k . ": " . $v . "<br />";
?>
 </body>
</html>