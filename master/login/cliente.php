<?php
include_once "usuario.php";
$u = new usuario();
if($u->estaIniciada()){
	//Hay un usuario iniciado
	if($u->getTipoUs() == "cliente"){
		echo "<p>Hola " . $u->getNombreUsuario() . " este es tu espacio privado</p>";
		echo "<a href=\"cerrar.php\">Cerrar sesión</a>";
	}else{
		echo "El usuario: " . $u->getNombreUsuario() . " No tiene permiso para estar aquí";
	}
}else{
	echo "No se ha iniciado sesión con ningún usuario";
}
?>