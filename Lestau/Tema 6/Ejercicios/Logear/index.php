<?php
	include_once "usuario.php";
	
	$u=new usuario();
	$u->logIn("usu1","1");
	header("Location: administrador.php");
	
	/*
	//EJEMPLO DE USO 1: Inicio de sesión: Sesión fallida
	if($u->logIn("aaaa","aaaa")){
		echo "Bienvenido <b>" . $u->getNombreUsuario() . ". </b>PERFIL: <b>" . $u->getTipoUs() . "</b><br />";
	}else{
		echo "Usuario/contraseña Incorrectos<br />";
	}
	//Comprobación
	if($u->estaIniciada()){
		echo "Hola <b>" . $u->getNombreUsuario() . "</b><br />";
	}else{
		echo "Sesión cerrada<br />";
	}
	echo "<br /><br /><br />";
	
	
	//EJEMPLO DE USO 2: Inicio y cierre de sesión: Sesión OK
	if($u->logIn("usu1","1")){
		echo "Bienvenido <b>" . $u->getNombreUsuario() . ". </b>PERFIL: <b>" . $u->getTipoUs() . "</b><br />";
	}else{
		echo "Usuario/contraseña Incorrectos<br />";
	}
	//Cierre de sesión
	$u->logOut();
	//Comprobación
	if($u->estaIniciada()){
		echo "Hola <b>" . $u->getNombreUsuario() . "</b><br />";
	}else{
		echo "Sesión cerrada<br />";
	}
	echo "<br /><br /><br />";
	
	
	
	//EJEMPLO DE USO 3: Crear un usuario nuevo
	$u = new usuario("usu4","4","Usuario 4","Cliente");
	//Inicio de sesión con el nuevo usuario
	if($u->logIn("usu4","4")){
		echo "Bienvenido <b>" . $u->getNombreUsuario() . ". </b>PERFIL: <b>" . $u->getTipoUs() . "</b><br />";
	}else{
		echo "Usuario/contraseña Incorrectos<br />";
	}
	//Comprobación
	if($u->estaIniciada()){
		echo "Hola <b>" . $u->getNombreUsuario() . "</b><br />";
	}else{
		echo "Sesión cerrada<br />";
	}*/
?>