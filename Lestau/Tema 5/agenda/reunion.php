<?php
//clase Reunion con atributo direccion y hereda la clase Evento
include_once 'evento.php';
class Reunion extends Evento{
    private $direccion;

    //constructor
    public function __construct($fecha, $hora, $titulo, $descripcion, $direccion){
        $this->direccion = $direccion;
        parent::__construct($fecha, $hora, $titulo, $descripcion);
    }

    //getters
    public function getDireccion(){
        return $this->direccion;
    }

    //setters
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function __toString(){
        return $this->getFecha() . " " . $this->getHora() . ": " . $this->getTitulo() . ", " . $this->getDescripcion() . ", " . $this->direccion;
    }
}
?>