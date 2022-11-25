<?php
//clase Cita con atributo p y hereda la clase Evento
include_once 'evento.php';
class Cita extends Evento{
    private $p;

    //constructor
    public function __construct($fecha, $hora, $titulo, $descripcion, $p){
        $this->p = $p;
        parent::__construct($fecha, $hora, $titulo, $descripcion);
    }

    //getters
    public function getP(){
        return $this->p;
    }

    //setters
    public function setP($p){
        $this->p = $p;
    }

    public function __toString(){
        return $this->getFecha() . " " . $this->getHora() . ": " . $this->getTitulo() . ", " . $this->getDescripcion() . ", " . $this->p;
    }
}
?>