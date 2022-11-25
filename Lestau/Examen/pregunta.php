<?php
abstract class Pregunta{
    private $tipo;

    public function __construct($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
        // si al principio de cada pregunta pone test, devuelve test, si pone vf, devuelve vf
        return $this->tipo;
    }

    abstract public function preguntar();
    
    abstract public function responder($respuesta);
}

?>