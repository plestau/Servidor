<?php
function escribeXML($xml){
	echo "<ul>";
	foreach($xml as $k=>$v){
		if($v->children()){
			echo "<li>" . $k . " <b>(" . $v->count()/3 . " profesores)</b></li>";
			escribeXML($v);
		}else{
			echo "<li>" . $k . "=" . $v . "</li>";
			
		}
	}
	echo "</ul>";
}

$xml = simplexml_load_file("datos.xml");
escribeXML($xml);
?>