<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Cookies</title>
</head>
<body>
    <h1>Control de visitas con cookies</h1>
    <form action="arraycookies.php" method="post">
        <input type="submit" name="borrar" id="borrar" value="Borrar Cookie">
        <input type="submit" name="actualizar" id="actualizar" value="Actualizar página">
    </form>
<?php
    $visitas = 2;
    if(!isset($_COOKIE['usuario'])){
        echo "<p>Has visitado esta página por primera vez</p>";
        setcookie('usuario[0]', $visitas, time() + 60 * 60 * 24 * 365);
        setcookie('usuario[1]', date("D d M Y") . " a las " . date("H:i:s"), time() + 60 * 60 * 24 * 365);
    }else{
        //cada vez que se actualiza la página se incrementa el contador
        $visitas = $_COOKIE['usuario'][0] + 1;
        echo "<p>Has visitado esta página " . $_COOKIE['usuario'][0] . " veces</p>";
        setcookie('usuario[0]', $visitas, time() + 60 * 60 * 24 * 365);
        setcookie('usuario[1]', date("D d M Y") . " a las " . date("H:i:s"), time() + 60 * 60 * 24 * 365);
        echo "<p>Las últimas veces que nos visitó fue en: <br>";
        for($i=2;$i<$visitas;$i++){
            setcookie("usuario[$i]", date("D d M Y") . " a las " . date("H:i:s"), time() + 60 * 60 * 24 * 365);
            for($x=1;$x<=count($_COOKIE['usuario']);$x++){
                echo $_COOKIE["usuario"][$x] . "<br>";
            }
        }
    }
    // si se pulsa el boton borrar se borra la cookie entera
    if(isset($_POST['borrar'])){
        for($x=0;$x<=200;$x++){
            setcookie("usuario[$x]", '', time() - 3600);
        }
        header("Refresh: 0; url=arraycookies.php");
    }
?>
</body>
</html>