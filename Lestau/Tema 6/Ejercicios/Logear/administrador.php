<?php
include_once "usuario.php";
$u = new usuario();
if($u->estaIniciada()){
	//Hay un usuario iniciado
	if($u->getTipoUs() == "administrador"){
		echo "Hola " . $u->getNombreUsuario() . " este es tu espacio privado";
	}else{
		echo "El usuario: " . $u->getNombreUsuario() . " No tiene permiso para estar aquí";
	}
}else{
	echo "No se ha iniciado sesión con ningún usuario";
}
?>