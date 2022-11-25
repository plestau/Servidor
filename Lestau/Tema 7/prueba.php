<?php
$cadena_conexion = 'mysql:dbname=prueba;host=localhost';
$usuario = 'root';
$contrasena = '';
try{
    $db = new PDO($cadena_conexion, $usuario, $contrasena);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM usuario";
    $usuarios = $db->query($sql);
    foreach($usuarios as $usuario){
        print("Usuario: " . $usuario["clave"] . " - ". $usuario['nombre'] . " - " . $usuario["rol"]. "<br>");
    }
}catch(PDOException $e){
    print("Error: " . $e->getMessage());
    die();
}
?>
