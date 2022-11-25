<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colores de fondo</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <label for='elegir'>Elige un color de fondo:
            <input name='color' value='red' type='radio'>Rojo
            <input name='color' value='green' type='radio'>Verde
            <input name='color' value='blue' type='radio'>Azul
        </label></br>
        <input type='submit' name="enviar" value='Cambiar color'>
    </form>
<?php
// almacena la eleccion del usuario en una cookie
if (isset($_POST['enviar'])) {
    setcookie('color', $_POST['color']);
    header("Location: colorfondo.php");
}

// si la cookie existe, la lee y la muestra
if (isset($_COOKIE['color'])) {
    $color = $_COOKIE['color'];
    echo "<body style='background-color: " . $color . "'>";
}
?>
</body>
</html>