<body>
    <form action="" method="post" enctype="multipart/form-data"> 
        <input type="file" name="archivo" id="archivo"/>
        <input type="submit" value="Enviar" name="enviar"/>
        <input type="submit" value="ver carpeta" name="ver">
    </form>
<?php
//crea una carpeta si no existe
if(isset($_POST["enviar"])){
    if (!file_exists("fotos")) {
        mkdir("fotos", 0777, true);
        echo "Se ha creado la carpeta";
    }else{
        echo "La carpeta ya existe";
    }
    move_uploaded_file($_FILES['archivo']['tmp_name'], "fotos/" . $_FILES['archivo']['name']);
}

if(isset($_POST["ver"])){
    header("Location: fotos/");
}
?>