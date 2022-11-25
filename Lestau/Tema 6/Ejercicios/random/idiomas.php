<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
</head>
<body>
    <form action="" method="post">
        <label for ="elegir">Elige un idioma:
            <input name="idioma" value="Espanol" type="radio">Español
            <input name="idioma" value="Ingles" type="radio">Inglés
        </label>
        </br>
        <button>Cambiar idioma</button>
    </form>
<?php
    // funcion que guarda el idioma elegido en una cookie y muestra el resultado
    function idioma(){
        if(isset($_POST['idioma'])){
            $idioma = $_POST['idioma'];
            setcookie('idioma', $idioma, time() + 365 * 24 * 60 * 60);
            if($idioma == "Espanol"){
                echo "Hola";
            }
            if($idioma == "Ingles"){
                echo "Hello";
            }
        return $idioma;
        }
}

    
    idioma();
?>
</body>
</html>