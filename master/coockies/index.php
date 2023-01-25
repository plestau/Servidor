<?php
	if(!isset($_COOKIE["contador"])){
		setcookie("contador",0,time()+3600);
	}
	else{ //La cookie ya existe
		$valor = $_COOKIE["contador"] + 1;
		setcookie("contador",$valor,time()+3600);
		echo "Contador: " . $valor;
	}
?>