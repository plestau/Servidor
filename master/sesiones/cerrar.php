<html>
 <head>
  <title>Ejemplo de sesiones</title>
  <meta charset="UTF-8" />
 </head>
 <body>
 <h1>Cierre de sesión</h1>
 <a href="index.php">Ir a Index</a><br />
 <a href="primero.php">Ir a primero</a><br />
 <a href="segundo.php">Ir a segundo</a><br />
 <a href="#">Cerrar sesión</a>
<?php
	session_start();
	session_destroy();
	echo "<h3>Las Variables de sesión que hay ahora son:</h3>";
	foreach($_SESSION as $k => $v)
		echo $k . ": " . $v . "<br />";
?>
 </body>
</html>