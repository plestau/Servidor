<?php
$fp = fopen("1.txt", "r");
if(!$fp = fopen("1.txt", "r")){
    echo "No se ha podido abrir el archivo";
}else{
    $contenido = fread($fp, filesize("1.txt"));
    echo $contenido;
    fclose($fp);
}

$fp2 = fopen("2.txt", "r");
if(!$fp2 = fopen("2.txt", "r")){
    echo "<b>No existe el archivo, creando. Recarga la página</b>";
    //crea el archivo 2.txt
    $fp2 = fopen("2.txt", "w");
    //escribe en el archivo 2.txt
    fwrite($fp2, "Archivo nuevo");
    // lee el archivo 2.txt
}else{
    $contenido2 = fread($fp2, filesize("2.txt"));
    echo $contenido2;
    //cierra el archivo 2.txt
    fclose($fp2);

}
?>