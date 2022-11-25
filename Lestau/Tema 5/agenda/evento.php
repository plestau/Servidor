<?php
//clase Evento con atributos fecha, hora, titulo y descripcion
class Evento{
    private $fecha;
    private $hora;
    private $titulo;
    private $descripcion;

    //constructor
    public function __construct($fecha, $hora, $titulo, $descripcion){
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
    }

    //getters
    public function getFecha(){
        return $this->fecha;
    }

    public function getHora(){
        return $this->hora;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    //setters
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function setHora($hora){
        $this->hora = $hora;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
}
?>