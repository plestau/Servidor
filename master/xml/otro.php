<?php
$string = <<<XML
<a>
 <prueba>1111</prueba>
 <probando a="A">
  <uno>1</uno>
  <dos>
	<veinte>20</veinte>
	<veintiuno>21</veintiuno>
  </dos>
  <tres>
	<treinta>30</treinta>
  </tres>
 </probando>
 <mas>cosa</mas>
</a>
XML;

function escribeXML($xml){
	echo "<ul>";
	foreach($xml as $k=>$v){
		if($v->children()){
			echo "<li>" . $k . "</li>";
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