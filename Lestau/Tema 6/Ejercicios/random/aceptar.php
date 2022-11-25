<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aceptar cookies</title>
</head>
<body>
    <?php
    // si no existe la cookie, muestra un cartel de aceptación
    if (!isset($_COOKIE['aceptar'])) {
        echo "<h1>Esta web utiliza cookies</h1>";
        echo "<p>Para continuar navegando, acepta las cookies</p>";
        echo "<form action='aceptar.php' method='post'>";
        echo "<input type='submit' name='aceptar' value='Aceptar cookies'>";
        echo "</form>";
    } else {
        // si existe la cookie, muestra un mensaje de bienvenida
        echo "<h1>Bienvenido a la web</h1>";
        echo "<p>Esta web está utilizando cookies para mejorar tu experiencia de usuario</p>";
        echo "<form action='aceptar.php' method='post'>";
        echo "<input type='submit' name='borrar' value='Borrar cookies'>";
        echo "</form>";
    }
    if(isset($_REQUEST["aceptar"])){
        // si se ha pulsado el enlace de aceptar, se crea la cookie
        setcookie("aceptar", "si", time() + 60 * 60 * 24 * 365);
        header("Location: aceptar.php");
    }
    if(isset($_REQUEST["borrar"])){
        // si se ha pulsado el enlace de borrar, se borra la cookie
        setcookie("aceptar", "", time() - 1);
        header("Location: aceptar.php");
    }
    ?>
</body>
</html>