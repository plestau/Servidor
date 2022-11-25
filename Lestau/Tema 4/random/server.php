<?php
if (isset($_POST['subir'])) {
    if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
        move_uploaded_file($_FILES['archivo']['tmp_name'], "subidos/" . $_FILES['archivo']['name']);
        echo "El archivo se ha subido correctamente";
    } else {
        echo "Error al subir el archivo";
    }
}
?>