<?php
// recorremos un fichero de texto letra a letra y mostramos su contenido
$fp = fopen("1.txt", "r");
if(!$fp = fopen("1.txt", "r")){
    echo "No se ha podido abrir el archivo";
}else{
    while(!feof($fp)){
        $letra = fgetc($fp);
        echo $letra;
        echo "-";
    }
    fclose($fp);
}
?>