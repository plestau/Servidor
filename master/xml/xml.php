<?php
	class xml{
		private $fich;
		private $sxml;
		
		public function __construct($f){
			if(file_exists($f)){
				$this->sxml = simplexml_load_file($f);
			}else{
				$string = <<<XML
				<?xml version='1.0'?> 
				<asignaturas>
				</asignaturas>
				XML;
				//Datos de la asignatura
				$this->sxml = new SimpleXMLElement($string);
			}
			$this->fich = $f;
		}
		
		public function escribeAsig($datos){
			//calculo la posición de la asignatura
			$n = $this->sxml->count();
			//creo el nodo asignatura
			$this->sxml->addChild("asignatura");
			//guardo los datos generales
			$this->sxml->asignatura[$n]->addChild("codigo",$datos["codigo"]);
			$this->sxml->asignatura[$n]->addChild("nombre",$datos["nombre"]);
			$this->sxml->asignatura[$n]->addChild("duracion",$datos["duracion"]);
			$this->sxml->asignatura[$n]->addChild("tipo",$datos["tipo"]);
			//guardo los datos de los profesores
			//Profesores Titulares
			if(isset($datos["titDNI"])){
				$this->sxml->asignatura[$n]->addChild("titulares");
				foreach($datos["titDNI"] as $k => $v){
					$this->sxml->asignatura[$n]->titulares->addChild("profesor");
					$this->sxml->asignatura[$n]->titulares->profesor[$k]->addChild("dni",$v);
					$this->sxml->asignatura[$n]->titulares->profesor[$k]->addChild("nombre",$datos["titNombre"][$k]);
					$this->sxml->asignatura[$n]->titulares->profesor[$k]->addChild("apellidos",$datos["titApellidos"][$k]);
				}
			}
			//Profesores Prácticas
			if(isset($datos["pracDNI"])){
				$this->sxml->asignatura[$n]->addChild("practicas");
				foreach($datos["pracDNI"] as $k => $v){
					$this->sxml->asignatura[$n]->practicas->addChild("profesor");
					$this->sxml->asignatura[$n]->practicas->profesor[$k]->addChild("dni",$v);
					$this->sxml->asignatura[$n]->practicas->profesor[$k]->addChild("nombre",$datos["pracNombre"][$k]);
					$this->sxml->asignatura[$n]->practicas->profesor[$k]->addChild("apellidos",$datos["pracApellidos"][$k]);
				}
			}
		}
		
		public function leeAsig($cod){
			//Busca en $this->sxml una asignatura con código $cod. Si existe, devuelve un array con todos
			//los datos de esa asignatura. Si no existe, devuelve false.
		}
		
		public function salvarXML(){
			$this->sxml->asXML($this->fich);
		}
	}
?>