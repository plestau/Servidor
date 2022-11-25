<?php
$dir_subida = 'upload/';
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    //Procesar el archivo
	$letras=array("a" => 0,"e" => 0,"i" => 0,"o" => 0,"u" => 0);
	//apertura del archivo modo lectura
	$f = fopen($fichero_subido,"r");
	//Procesamos el archivo
	while(!feof($f)){
		$caracter=fgetc($f);
		if(strtolower($caracter)=="a")
			$letras["a"]++;
		elseif(strtolower($caracter)=="e")
			$letras["e"]++;
		elseif(strtolower($caracter)=="i")
			$letras["i"]++;
		elseif(strtolower($caracter)=="o")
			$letras["o"]++;
		elseif(strtolower($caracter)=="u")
			$letras["u"]++;
	}
	//cierre del archivo
	fclose($f);
	//Borramos el archivo del servidor
	unlink($fichero_subido);
	//Mostramos resultados
	echo "<ul>";
	echo "<li>A: " . $letras["a"] . " </li>";
	echo "<li>E: " . $letras["e"] . " </li>";
	echo "<li>I: " . $letras["i"] . " </li>";
	echo "<li>O: " . $letras["o"] . " </li>";
	echo "<li>U: " . $letras["u"] . " </li>";
	/*foreach($letras as $letra => $contador)
		echo "<li>$letra: $contador </li>";*/
	echo "</ul>";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

?>