<?php
include_once 'pregunta.php';
class PreguntaTest extends Pregunta{
    private $enunciado;
    private $correcta;
    private $respuestas = array();
    private $puntuacion;

    public function __construct($enunciado, $respuestas){
        parent::__construct("test");
        $this->enunciado = $enunciado;
        $this->respuestas = $respuestas;
    }

    public function preguntar(){
        // escribe el enunciado
        echo $this->enunciado;
        // escribe las respuestas posibles
        echo "<br>";
        /*foreach($this->respuestas as $respuesta){
            echo $respuesta . "<br>";
        } NO FUNCIONA, NO ME MUESTRA LAS RESPUESTAS*/
    }

    public function responder($respuesta){
        if($respuesta == $this->correcta){
            echo "Correcto";
            $this->puntuacion =+ 1;
            return $this->puntuacion;
        }else{
            echo "Incorrecto";
        }
    }

    public function getRespuestas(){
        return $this->respuestas;
    }
}
?>