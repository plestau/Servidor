<?php
$fichero = fopen("matriz.php", "r");
if(!$fichero = fopen("matriz.php", "r")){
    echo "No se ha podido abrir el archivo";
}else{
while(!feof($fichero)){
    $num = fscanf($fichero, "%d %d %d %d", $num1, $num2, $num3, $num4);
    echo $num1, $num2, $num3, $num4, "<br>";
    }
}
echo "<br>";
rewind($fichero);
while(!feof($fichero)){
    $num = fscanf($fichero, "%d %d %d %d", $num1, $num2, $num3, $num4);
    echo $num1, $num2, $num3, $num4, "<br>";
    }
fclose($fichero);
?>