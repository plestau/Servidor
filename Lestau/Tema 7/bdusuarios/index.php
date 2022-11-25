<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>
</head>
<body>
    <h1>Base de datos con usuarios</h1>
    <form action="" method="post">
        <input type = "number" name = "id" placeholder = "id">
        <input type = "text" name = "nombre" placeholder = "Nombre">
        <input type = "text" name = "rol" placeholder = "Rol">
        <input type = "submit" name = "añadirusuario" value = "Enviar">
        <input type = "submit" name = "borrarusuario" value = "Borrar">
        <input type = "submit" name = "verusuarios" value = "Ver usuarios">
        <input type = "submit" name = "modificarusuario" value = "Modificar">
    </form> 
<?php
include_once 'conexion.php';
include_once 'usuario.php';

// si se pulsa el boton añadir usuario se ejecuta la funcion inserta
if(isset($_POST['añadirusuario'])){
    $u = new usuario();
    if($_POST['nombre'] == "" || $_POST['rol'] == ""){
        echo "ERROR: No se ha añadido porque no se ha introducido el nombre o el rol";
    }else{
        echo $u->inserta($_POST['nombre'], $_POST['rol']);
    }
}
// si se pulsa el boton ver usuarios se ejecuta la funcion verUsuarios
if(isset($_POST['verusuarios'])){
    $u = new usuario();
    $resul = $u->verUsuarios();
    echo "<br>";
    echo "<table border = '1'>";
    echo "<tr><th>Clave</th><th>Nombre</th><th>Rol</th></tr>";
    while($fila = $resul->fetch(PDO::FETCH_ASSOC)){
        echo "<tr><td>".$fila['clave']."</td><td>".$fila['nombre']."</td><td>".$fila['rol']."</td></tr>";
    }
    echo "</table>";

}
// si se pulsa el boton borrar usuario se ejecuta la funcion borrarUsuario
if(isset($_POST['borrarusuario'])){
    $u = new usuario();
    if($_POST['id'] == ""){
        echo "ERROR: No se ha borrado porque no se ha introducido el id";
    }else{
        echo $u->borrarUsuario($_POST['id']);
    }
}

// si se pulsa el boton modificar usuario se ejecuta la funcion modificaUsuario
if(isset($_POST['modificarusuario'])){
    $u = new usuario();
    $datos = array($_POST['nombre'], $_POST['rol']);
    if($_POST['nombre'] == "" || $_POST['rol'] == ""){
        echo "ERROR: No se ha modificado porque no se ha introducido el nombre o el rol";
    }else{
    echo $u->modificaUsuario($_POST['id'], $_POST['nombre'], $_POST['rol']);
    }
}
?>
</body>
</html>