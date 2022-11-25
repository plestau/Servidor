<html>
 <head>
  <title>Ejemplo Upload</title>
  <meta charset="UTF-8" />
 </head>
 <body>
  <!-- El tipo de codificación de datos, enctype, DEBE especificarse como sigue -->
  <form enctype="multipart/form-data" action="https://educacionadistancia.juntadeandalucia.es/centros/granada/pluginfile.php/285554/mod_folder/content/0/UD4/ficheros/recogeArchivo.php" method="POST">
    <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    Enviar este fichero: <input name="fichero_usuario" type="file" />
    <input type="submit" value="Enviar fichero" />
  </form>
 </body>
</html>