<?php
include_once "conexion.php";

class usuario{
	private $c;
	
	public function __construct(){
		$this->c=new conexion();
	}
	
	public function inserta($nombre,$rol){
		
		return $this->c->consulta("INSERT INTO usuarios(nombre,rol) VALUES('$nombre','$rol')");
	}
	
	public function verUsuario($id){
		return $this->c->consulta("SELECT * FROM usuarios WHERE clave=$id")->fetch();
	}
	
	public function verUsuarios(){
		return $this->c->consulta("SELECT * FROM usuarios");
	}
	
	public function modificaUsuario($id,$datos){
		
	}
	
	public function borrarUsuario($id){
		return $this->c->consulta("DELETE FROM usuarios WHERE clave=$id");
	}
	
	public function __destruct(){
		$this->c = null;
	}
}
?>