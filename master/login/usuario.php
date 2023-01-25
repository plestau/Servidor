<?php
class usuario {
	//No hay atributos de clase. Trabajomos directamente con las variables de sesión
	
	public function __construct($u="",$c="",$n="",$t=""){
		if(!isset($_SESSION))
			session_start();
		if($u!="" && $c!="" && $n!="" && $t!=""){ //Creamos el nuevo usuario en el archivo
			if(!self::existeUsuario($u)){//Comprobamos que nu existe con método estático
				$usuario = $u.";".$c.";".$n.";".$t."\n";
				$f = fopen("datos.txt","a+");
				fwrite($f,$usuario);
				fclose($f);
			}
		}
	}
	
	//Método estático
	static public function existeUsuario($u){
		$f = fopen("datos.txt","r");
		while(!feof($f)){
			$linea=fgets($f);
			$usuario=explode(';',trim($linea));
			if($usuario[0] == $u){ //El usuario existe
				fclose($f);
				return true;
			}
		}
		fclose($f);
		return false;
	}
	
	public function logIn($u,$c){
		$f = fopen("datos.txt","r");
		while(!feof($f)){
			$linea=fgets($f);
			$usuario=explode(';',trim($linea));
			if($usuario[0] == $u && $usuario[1] == $c){ //El usuario existe
				$_SESSION["usuario"]=$usuario[0];
				$_SESSION["contraseña"]=$usuario[1];
				$_SESSION["nombre_completo"]=$usuario[2];
				$_SESSION["tipo_usuario"]=$usuario[3];
				$_SESSION["iniciada"]=true;
				fclose($f);
				return true;
			}
		}
		fclose($f);
		$_SESSION["iniciada"]=false;
		return false;
	}
	
	public function logOut(){
		$_SESSION["usuario"]="";
		$_SESSION["contraseña"]="";
		$_SESSION["nombre_completo"]="";
		$_SESSION["tipo_usuario"]="";
		$_SESSION["iniciada"]=false;
	}
	
	public function estaIniciada(){
		return isset($_SESSION["iniciada"])?$_SESSION["iniciada"]:false;
	}
	
	public function getUsuario(){
		return $_SESSION["iniciada"]?$_SESSION["usuario"]:false;
	}
	
	public function getTipoUs(){
		return $_SESSION["iniciada"]?$_SESSION["tipo_usuario"]:false;
	}
	
	public function getNombreUsuario(){
		return $_SESSION["iniciada"]?$_SESSION["nombre_completo"]:false;
	}
	
}
?>