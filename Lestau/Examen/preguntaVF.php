<?php
include_once 'pregunta.php';
class PreguntaVF extends Pregunta{
    private $enunciado;
    private $respuesta;
    private $puntuacion;

    public function preguntar(){
        echo $this->enunciado;
        echo "<br>";
    }

    public function responder($respuesta){
        if($respuesta == $this->respuesta){
            echo "Correcto";
            $this->puntuacion =+ 1;
            return $this->puntuacion;
        }else{
            echo "Incorrecto";
        }
    }
    
}
?>