<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include("operaciones.php");
    if (!isset($_GET["dato1"]))
{
?>
    <form action="" method="GET">
        <label>Campo 1 </label><input type="text" name="dato1"/><br />
        <br />
        <label>Campo 2 </label><input type="text" name="dato2"/><br />
        <br />
        <!--Select o menú de selección-->
        <label>Operaciones</label>
        <select name="menu1">
            <option value="A">Sumar</option>
            <option value="B">Restar</option>
            <option value="C">Multiplicar</option>
            <option value="D">Dividir</option>
            <option value="E">Módulo</option>
            <option value="F">Cociente</option>

        </select>
        <br /><br />
        <!--File-->
        <input type="submit" value="Calcular"/>
        <input type="reset" value="Limpiar"/>
    </form>
<?php
}else{
    echo "<h1>Resultados</h1>";
    if ($_GET["menu1"] == "A"){
        echo sumar($_GET["dato1"], $_GET["dato2"]);
    }
    elseif ($_GET["menu1"] == "B"){
        echo restar($_GET["dato1"], $_GET["dato2"]);
    }
    elseif ($_GET["menu1"] == "C"){
        echo multiplicar($_GET["dato1"], $_GET["dato2"]);
    }
    elseif ($_GET["menu1"] == "D"){
        echo dividir($_GET["dato1"], $_GET["dato2"]);
    }
    elseif ($_GET["menu1"] == "E"){
        echo módulo($_GET["dato1"], $_GET["dato2"]);
    }
    elseif ($_GET["menu1"] == "F"){
        echo cociente($_GET["dato1"], $_GET["dato2"]);
    }
}
?>
</body>
</html>