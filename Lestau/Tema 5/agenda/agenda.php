<?php
//clase Agenda con atributos privados contacto y evento
include_once 'contacto.php';
include_once 'evento.php';
class Agenda{
    private $contactos;
    private $eventos;

    //constructor
    public function __construct(){
        $this->contactos = array();
        $this->eventos = array();
    }

    //getters
    public function getContacto($telefono){
        foreach($this->contactos as $k => $v){
            if($v->getTelefono() == $telefono)
                return $v;
        }
        return false;
    }

    public function getEvento($telefono){
        foreach($this->eventos as $k => $v){
            if($v->getTelefono() == $telefono)
                return $v;
        }
        return false;
    }

    //setters para añadir al array
    public function setContacto($contacto){
        $this->contactos[] = $contacto;
    }

    public function setEvento($evento){
        $this->eventos[] = $evento;
    }

    public function __toString(){
        $str = "<h2>Contactos</h2>";
        foreach($this->contactos as $c)
            $str .= ($c . "<br />");
        $str .= "<h2>Eventos</h2>";
        foreach($this->eventos as $e)
            $str .= ($e . "<br />");
        return $str;
    }
}
?>