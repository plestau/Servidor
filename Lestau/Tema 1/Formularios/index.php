<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing de formularios con php</title>
</head>
<body bgcolor="#00A9F8">
<?php
    if (!isset($_GET["dato1"]))
{
?>
    <form action="" method="GET">
        <label> Dime algo: </label>
        <!--Campo de texto-->
        <input type="text" name="dato1"/>
        <br /><br />
        <!--Radios de botones-->
        <input type="radio" value=1 name="botonRadio1"/>
        <label>Opción 1</label>
        <br />
        <input type="radio" value=2 name="botonRadio1"/>
        <label>Opción 2</label>
        <br />
        <input type="radio" value=3 name="botonRadio1"/>
        <label>Opción 3</label>
        <br />
        <!--Select o menú de selección-->
        <select name="menu1">
            <option value="A">Opción A</option>
            <option value="B">Opción B</option>
            <option value="C">Opción C</option>
            <option value="D">Opción D</option>
        </select>
        <br />
        <!--Casilla de verificación-->
        <input type="checkbox" value="Casilla 1" name="c1"/>
        <label>Cosa 1</label>
        <br />
        <input type="checkbox" value="Casilla 2" name="c2"/>
        <label>Cosa 2</label>
        <br />
        <!--Casilla de verificación 2-->
        <input type="checkbox" value="Casilla 1 Ejemplo 2" name="c3[]"/>
        <label>Cosa 3</label>
        <br />
        <input type="checkbox" value="Casilla 2 Ejemplo 2" name="c3[]"/>
        <label>Cosa 4</label>
        <br />
        <!--Select múltiple-->
        <select name="menu2[]" multiple size="6">
            <option value="AAA">Opción 1</option>
            <option value="BBB">Opción 2</option>
            <option value="CCC">Opción 3</option>
            <option value="DDD">Opción 4</option>
            <option value="EEE">Opción 5</option>
            <option value="FFF">Opción 6</option>
        </select>
        <!--File-->
        <br />
        <input type="file" name="archivo"/>
        <br /><br />
        <input type="submit" value="Vamos al lío"/>
        <input type="reset" value="limpiar"/>
    </form>
<?php
}else{
    echo "<h1>Recepción del formulario</h1>";
    foreach($_GET as $clave => $valor){
        if($clave == "c3"){
            foreach($valor as $clave2 => $valor2){
                echo "El elemento <b>$clave2 de c3</b> tiene <b>$valor2</b> <br/>";
            }
        }
        elseif($clave == "menu2"){
            foreach($valor as $clave3 => $valor3)
            echo "El elemento <b>$clave3</b> tiene <b>$valor3</b> <br/>";
    }
    else
        echo "El elemento <b>$clave</b> tiene  <b>$valor</b> <br />";
    }
}
?>
</body>
</html>