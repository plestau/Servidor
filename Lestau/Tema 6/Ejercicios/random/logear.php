<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
function cerrarSesion(){
    if(isset($_POST["borrar"])){
        setcookie("logear", "", time() - 1);
        setcookie("password", "", time() - 1);
        header("Refresh:3; url=logear.php");
        echo "Se ha cerrado la sesión. Redirigiendo...";
    }
}
// si no existe la cookie, muestra un cartel de iniciar sesion
if (!isset($_COOKIE['logear'])) {
    echo "<h1>Inicia sesión</h1>";
    echo "<p>Para continuar navegando, inicia sesion</p>";
    echo "<form action='logear.php' method='post'>";
    echo "<input type='text' name='usuario' placeholder='Usuario'><br><br>";
    echo "<input type='password' name='password' placeholder='Contraseña'><br><br>";
    echo "<input type='submit' name='logear' value='Iniciar sesion'>";
    echo "</form>";
    if(isset($_POST["logear"])){
        setcookie("logear", $_POST["usuario"], time() + 60 * 60 * 24 * 365);
        setcookie("password", $_POST["password"], time() + 60 * 60 * 24 * 365); // esto es solo para pruebas, ya se que no es muy viable
        header("Location: logear.php");
    }
}
if(isset($_COOKIE["logear"]) && $_COOKIE["logear"] == "Pepe" && $_COOKIE["password"] == "pepo"){
    echo "<h1>FUNCIONA</h1>";
    cerrarSesion();
}

if(isset($_COOKIE["logear"])){
    // si existe la cookie, muestra un mensaje de bienvenida
    echo "<h1>Bienvenido a la web</h1>";
    echo "Iniciaste sesion como " . $_COOKIE["logear"];
    echo "<form action='logear.php' method='post'>";
    echo "<input type='submit' name='borrar' value='Cerrar sesion'>";
    echo "</form>";
    cerrarSesion();
}
?>
</body>
</html>