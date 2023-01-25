<?php
$usuarios = array('Pedro', 'Rodrigo', 'Alberto');
if(isset($_GET["user"])){
    $user = $_GET["user"];
    if(in_array($user, $usuarios)){
        echo "El usuario $user ya existe";
        echo "<style>p{color:red;}</style>";
        return false;
    }else{
        echo "El usuario $user está disponible";
        echo "<style>p{color:green;}</style>";
        return true;
    }
}
?>