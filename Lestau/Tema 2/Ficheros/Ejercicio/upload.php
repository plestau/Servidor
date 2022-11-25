<?php
$dir_subida = 'upload';
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    //Procesar el archivo
	$letras=array("a" => 0,"e" => 0,"i" => 0,"o" => 0,"u" => 0, "A" => 0, "E" => 0, "I" => 0, "O" => 0, "U" => 0);
	//apertura del archivo modo lectura
	$f = fopen($fichero_subido,"r");
	//Procesamos el archivo
	while(!feof($f)){
		$caracter=fgetc($f);
		if($caracter=="a")
			$letras["a"]++;
		elseif($caracter=="e")
			$letras["e"]++;
		elseif($caracter=="i")
			$letras["i"]++;
		elseif($caracter=="o")
			$letras["o"]++;
		elseif($caracter=="u")
			$letras["u"]++;
		elseif($caracter=="A")
			$letras["A"]++;
		elseif($caracter=="E")
			$letras["E"]++;
		elseif($caracter=="I")
			$letras["I"]++;
		elseif($caracter=="O")
			$letras["O"]++;
		elseif($caracter=="U")
			$letras["U"]++;
	}
	//cierre del archivo
	fclose($f);
	//Borramos el archivo del servidor
	unlink($fichero_subido);
	//Mostramos resultados
	echo "<ul>";
    echo "Minúsculas: </br>";
	echo "<li>a: " . $letras["a"] . " </li>";
	echo "<li>e: " . $letras["e"] . " </li>";
	echo "<li>i: " . $letras["i"] . " </li>";
	echo "<li>o: " . $letras["o"] . " </li>";
	echo "<li>u: " . $letras["u"] . " </li>";
    echo "</br>";
    echo "Mayúsculas: </br>";
    echo "<li>A: " . $letras["A"] . " </li>";
	echo "<li>E: " . $letras["E"] . " </li>";
	echo "<li>I: " . $letras["I"] . " </li>";
	echo "<li>O: " . $letras["O"] . " </li>";
	echo "<li>U: " . $letras["U"] . " </li>";
	echo "</ul>";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

?>