<?php
class accesibilidad{
	private $color;
	private $tamanio;
	
	public function __construct($c="",$t=""){
		if($c == "" && $t == ""){
			if(!isset($_COOKIE["opciones"])){
				$this->color="F00"; //Rojo color por defecto
				$this->tamanio=12; //12 tamaño por defecto
			}else{
				$this->color=$_COOKIE["opciones"]["color"];
				$this->tamanio=$_COOKIE["opciones"]["tamanio"];
			}
		}else{
			$this->color=$c; //Rojo color por defecto
			$this->tamanio=$t; //12 tamaño por defecto
		}
		setcookie("opciones[color]",$this->color,time()+3600);
		setcookie("opciones[tamanio]",$this->tamanio,time()+3600);
	}
	
	public function getColor(){
		return $this->color;
	}
	
	public function getTamanio(){
		return $this->tamanio;
	}
}
?>