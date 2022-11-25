<html>
 <head>
  <title>Tabla de multiplicar</title>
  <meta charset="UTF-8" />
 </head>
 <body>
<?php
	define ("num", 3, true);
	echo "<table border=\"1\">";
	echo "<tr>";
	echo "<td align=\"center\" colspan=\"2\">Tabla del " . num . "</td>";
	echo "</tr>";
	for($i=0;$i<=10;$i++){
		echo "<tr>";
		echo "<td align=\"center\">" . num . " x " . $i;
		echo "<td align=\"center\">" . num*$i . "</td>";
		echo "</tr>";
	}
?>
 </body>
</html>
