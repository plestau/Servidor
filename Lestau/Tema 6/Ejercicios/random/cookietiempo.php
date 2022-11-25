<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie usuario</title>
</head>
<body>
    <h1>Creación y destrucción de cookies</h1>
    <form action="cookietiempo.php" method="post">
        <label for="usuario">Nombre de usuario:
            <input type="text" name="usuario" id="usuario">
        </label><br><br>
        <label for="duracion">Duración cookie (entre 1 y 60 seg):
            <input type="number" name="duracion" id="duracion">
        </label><br><br>
        <input id="crear" type="submit" name="crear" value="Crear cookie">
        <input id="borrar" type="submit" name="borrar" value="Borrar cookie">
        <input id="actualizar" type="submit" name="actualizar" value="Actualizar página">
    </form>
<?php
    if(!isset($_COOKIE['usuario'])){
        echo "<p>No hay ninguna cookie almacenada</p>";
    }
    if(isset($_COOKIE['usuario'])){
        echo "<p>Hola ".$_COOKIE['usuario'].", bienvenid@ a nuestra página web</p>";
        echo "<p>La cookie <b>usuario</b> tiene un valor de <b>" . $_COOKIE["usuario"] . "</b></p>";
    }
    if(isset($_POST['crear'])){
        setcookie("usuario", $_POST['usuario'], time() + $_POST['duracion']);
        header("Refresh:0");
    }
    if(isset($_POST['borrar'])){
        setcookie("usuario", "", time() - 1);
        header("Refresh:0");
    }
    if(isset($_POST['actualizar'])){
        header("Location: cookietiempo.php");
    }
?>
</body>
</html>