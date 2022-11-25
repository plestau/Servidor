<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <form action='' method='post'>
        <input type='submit' name='borrar' value='Borrar'>
    </form>
<?php
    // funcion que cuenta cuantas veces has visitado la página y almacena el valor en una cookie
    function contador(){
        if(isset($_COOKIE['contador'])){
            $contador = $_COOKIE['contador'];
            $contador++;
            setcookie('contador', $contador, time() + 365 * 24 * 60 * 60);
        }else{
            $contador = 1;
            setcookie('contador', $contador, time() + 365 * 24 * 60 * 60);
        }
        return $contador;
    }

    // funcion que muestra el contador
    function mostrarContador(){
        $contador = contador();
        echo "Has visitado esta página $contador veces";
    }
    mostrarContador();

    // funcion que borra la cookie al pulsar el boton
    if(isset($_POST['borrar'])){
        setcookie('contador', '', time() - 1000);
        echo "<br>";
        echo "Se ha cerrado la sesión, redirigiendo...";

        header("Refresh:5; url=contador.php");
    }   
?>
</body>
</html>