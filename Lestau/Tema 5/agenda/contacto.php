<?php
//clase Contacto con atributos telefono y correo
class Contacto{
    private $telefono;
    private $correo;

    //constructor
    public function __construct($telefono, $correo){
        $this->telefono = $telefono;
        $this->correo = $correo;
    }

    //getters
    public function getTelefono(){
        return $this->telefono;
    }

    public function getCorreo(){
        return $this->correo;
    }

    //setters
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }
}
?>