<html>
 <head>
 </head>
 
 <body>
<?php
	$xml = simplexml_load_file("datos.xml");
	foreach($xml->attributes() as $key => $value)
		/*if(is_object($xml->$key))
			echo $key . " = Objeto<br />";
		else*/
			echo $key . " = " . $value . "<br />";
?>
 </body>
</html>