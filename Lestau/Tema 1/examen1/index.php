<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen 1</title>
</head>
<body>
    <form action=<?php $_SERVER['PHP_SELF'] ?>form="get">
        <label for="Usuario">
            <input type="text" id="Usuario" name="Usuario" placeholder="Escribe usuario"></br>
            <input type="password" id="Contraseña" name="Contraseña" placeholder="Escribe contraseña"></br>
            <input type="submit" id="Enviar" name="Enviar" value="Enviar">
        </label>
    </form>
</body>
</html>