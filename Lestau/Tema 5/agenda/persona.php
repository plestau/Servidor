<?php
//clase Persona con atributos nombre y apellidos y hereda la clase Contacto
include_once 'contacto.php';
class Persona extends Contacto{
    private $nombre;
    private $apellidos;

    //constructor
    public function __construct($nombre, $apellidos, $telefono, $correo){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        parent::__construct($telefono, $correo);
    }

    //getters
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellidos;
    }

    //setters
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellidos){
        $this->apellidos = $apellidos;
    }

    public function __toString(){
        return $this->nombre . " " . $this->apellidos . ": " . $this->getTelefono() . ", " . $this->getCorreo();
    }
}
?>