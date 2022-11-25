<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.9</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="get">
        <input type="text" name="text" placeholder="Escribe aqui"/>
        <input type="submit" name="submit" value="Enviar"/>
    </form>
<?php 
    if (isset($_GET["submit"])){
        $text = $_GET["text"];
        if (strlen($text) >= 6 && strlen($text)<=15){
            $x = str_split($text);
            foreach($x as $texto){
                if (ctype_digit($texto)){
                    echo "Existe un número </br>";
                }
                elseif (ctype_upper($texto)){
                    echo "<Existe un valor en mayúscula </br>";
                }
                elseif(ctype_lower($texto)){
                    echo "<Existe un valor en minúsucla </br>";
                }
                elseif(ctype_alnum($texto)){
                    echo "<Existe un valor alfanumérico </br>";
                }
            }
        }
    }
?>
</body>
</html>