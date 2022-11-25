<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="valor1" placeholder="Valor 1"/>
        <input type="text" name="valor2" placeholder="Valor 2"/>
        <input type="text" name="valor3" placeholder="Valor 3"/>
<?php
    $v = array($_GET["valor1"], $_GET["valor2"], $_GET["valor3"]);
        echo 'a) '.(-($v[1])+(sqrt((pow($v[1], 2)-(4*$v[0]*$v[2])))))/(2*$v[0]).'<br>';
        echo 'b) '.(-($v[1])-(sqrt((pow($v[1], 2)-(4*$v[0]*$v[2])))))/(2*$v[0]);
?>
    </form>
</body>
</html>
