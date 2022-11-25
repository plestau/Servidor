<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (is_dir("carpeta_prueba") == true){
        $directory = opendir("carpeta_prueba");
        echo "Gestor del directorio: $directory"."</br>";
        while (false !== ($file = readdir($directory))){
            echo $file."</br>";
        }
        closedir($directory);
    }
?>
</body>
</html>