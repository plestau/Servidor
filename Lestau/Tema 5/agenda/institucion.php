<?php
//clase Institucion con atributo razon social y hereda la clase Contacto
include_once 'contacto.php';
class Institucion extends Contacto{
    private $razonSocial;

    //constructor
    public function __construct($razonSocial, $telefono, $correo){
        $this->razonSocial = $razonSocial;
        parent::__construct($telefono, $correo);
    }

    //getters
    public function getRazonSocial(){
        return $this->razonSocial;
    }

    //setters
    public function setRazonSocial($razonSocial){
        $this->razonSocial = $razonSocial;
    }

    public function __toString(){
        return $this->razonSocial . ": " . $this->getTelefono() . ", " . $this->getCorreo();
    }
}
?>