<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de sesiones</title>
</head>
<body>
        <h1>Estas En Index</h1>
    <form action="" method="get">
        <label>Dime algo: </label>
        <input type="text" name="cosa1">
        <input type="submit" value="Enviar">
    </form>
    <a href="#">Ir a Index</a></br>
    <a href="sesiones2.php">Ir a sesiones2</a></br>
    <a href="sesiones3.php">Ir a sesiones3</a></br>
    <a href="cerrarsesion.php">Cerrar sesión</a></br>
<?php
    session_start();
    if (isset($_GET['cosa1'])) {
        $_SESSION['cosa1'] = $_GET['cosa1'];
    }
    echo "<h3>Las variables de sesión que hay ahora son: </h3>";
    foreach($_SESSION as $k => $v){
        echo $k . " : " . $v . "<br>";
    }
?>
</body>
</html>