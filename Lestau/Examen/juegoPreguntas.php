<?php
include_once 'preguntaVF.php';
include_once 'preguntaTest.php';
class JuegoPreguntas{
    private $preguntas;
    private $puntuacion;

    // constructor cuyo parametro es la ubicacion del fichero del que se van a leer las preguntas
    public function __construct($fichero){
        $this->preguntas = array();
        $this->puntuacion = 0;
        $this->leerPreguntas($fichero);
    }

    // metodo que lee las preguntas del fichero y las almacena en el array preguntas
    private function leerPreguntas($fichero){
        $f = fopen($fichero, "r");
        while(!feof($f)){
            $linea = fgets($f);
            $linea = trim($linea);
            if($linea != ""){
                $datos = explode(";", $linea);
                $tipo = $datos[0];
                // elimina los corchetes del principio y del final de tipo
                $tipo = substr($tipo, 1, strlen($tipo)-2);
                $enunciado = $datos[1];
                $respuesta = $datos[2];

                if($tipo == "test"){
                    $this->preguntas[] = new PreguntaTest($enunciado, $respuesta);
                }else{
                    $this->preguntas[] = new PreguntaVF($enunciado, $respuesta);
                }
            }
        }
        fclose($f);
    }

    public function jugar(){
        //muestra los enunciados de las preguntas junto un select con las opciones de respuesta y un boton para enviar las respuestas
        echo "<form action='' method='get'>";
        echo "<ol>";
        foreach($this->preguntas as $pregunta){
            echo "<li><b>[" . $pregunta->getTipo() . "]</b> " . $pregunta->preguntar() . "</li>";
            echo "<select name='respuesta'>";
            if($pregunta->getTipo() == "test"){
                $respuestas = $pregunta->getRespuestas();
                foreach($respuestas as $respuesta){
                    echo "<option value='" . $respuesta . "'>" . $respuesta . "</option>";
                }
            }else{
                echo "<option value='verdadero'>Verdadero</option>";
                echo "<option value='falso'>Falso</option>";
            }
            echo "</select>";
        }
        echo "</ol>";
        echo "<input type='submit' Value='Corregir' />";
        echo "</form>";
    }

    public function corregir($respuestas){
        //funcion que calcula la puntuacion
        foreach ($this->preguntas as $pregunta){
            $pregunta->corregir($respuestas);
        }
    }

    public function num_preguntas(){
        //devuelve el numero de preguntas acertadas
        return $this->puntuacion;
    }
}
?>