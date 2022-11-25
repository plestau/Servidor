<?php
$archivo = fopen("varias_lineas.txt", "r");
if(!$archivo = fopen("varias_lineas.txt", "r")){
    echo "No se ha podido abrir el archivo";
}else{
    while(!feof($archivo)){
        $contenido = fgets($archivo);
        echo $contenido;
    }
    fclose($archivo);
    //escribir en el archivo
    $archivo = fopen("varias_lineas.txt", "w");
    fwrite($archivo, "Hola mundo");
    //copia el archivo con el nombre nuevo.txt
    copy("varias_lineas.txt", "nuevo.txt");
    copy("nuevo.txt", "borrador.txt");
    //renombrar el archivo
    rename("nuevo.txt", "nuevo2.txt");
    //borrar el archivo
    unlink("borrador.txt");
}
?>