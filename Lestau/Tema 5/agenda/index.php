<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <form action="" method="post" >
        <label for="nombre">Nombre
            <input type="text" name="nombre" id="nombre">
        </label></br>
        <label for="apellidos">Apellidos
            <input type="text" name="apellidos" id="apellidos">
        </label></br>
        <label for="institucion">Institución
            <input type="text" name="institucion" id="institucion">
        </label></br>
        <label for="telefono">Teléfono
            <input type="text" name="telefono" id="telefono">
        </label></br>
        <label for="correo">Correo
            <input type="text" name="correo" id="correo">
        </label></br>
        <label for="dia">Dia
            <input type="date" name="dia" id="dia">
        </label></br>
        <label for="hora">Hora
            <input type="time" name="hora" id="hora">
        </label></br>
        <label for="titulo">Título cita
            <input type="text" name="titulo" id="titulo">
        </label></br>
        <label for="descripcion">Descripcion cita
            <input type="text" name="descripcion" id="descripcion">
        </label>
        <input type="submit" value="Enviar">
    </form>
<?php
include "persona.php";
include "institucion.php";
include "cita.php";
include "reunion.php";
include "agenda.php";
$a = new Agenda();
$p = new Persona($_POST["nombre"], $_POST["apellidos"], $_POST["telefono"], $_POST["correo"]);
$i = new Institucion($_POST["institucion"], $_POST["telefono"], $_POST["correo"]);
$c = new Cita($_POST["dia"], $_POST["hora"], $_POST["titulo"], $_POST["descripcion"], $p);
$r = new Reunion($_POST["dia"], $_POST["hora"], $_POST["titulo"], $_POST["descripcion"], $i);
$a->setContacto($p);
$a->setContacto($i);
$a->setEvento($c);
$a->setEvento($r);
echo "<h1>Agenda</h1>";
echo $a;
?>
</body>
</html>