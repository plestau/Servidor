<?php
// clase animal con los atributos nombre, familia, color y tamaño
class Animal{
    protected $nombre;
    protected $familia;
    protected $color;
    protected $tamaño;
    // constructor
    public function __construct($nombre, $familia, $color, $tamaño){
        $this->nombre = $nombre;
        $this->familia = $familia;
        $this->color = $color;
        $this->tamaño = $tamaño;
        if(strlen($nombre) > 21){
            echo("<b>ERROR: El perro no puede tener un nombre con una longitud mayor a 21 caracteres</b></br>");
        }
    }
    // getters
    public function getNombre(){
        return $this->nombre;
    }
    public function getFamilia(){
        return $this->familia;
    }
    public function getColor(){
        return $this->color;
    }
    public function getTamaño(){
        return $this->tamaño;
    }
    // setters
    public function setNombre($nombre){
        if(strlen($nombre) > 21){
            echo("<b>ERROR: El perro no puede tener un nombre con una longitud mayor a 21 caracteres</b></br>");
            $this->nombre = "nombre no definido";
        }
        else{
            $this->nombre = $nombre;
            print("El nombre del perro ha sido cambiado a $nombre</br>");
        }
    }
    public function setFamilia($familia){
        $this->familia = $familia;
    }
    public function setColor($color){
        if(is_numeric($color)){
            echo("<b>ERROR: El color no puede contener numeros</b></br>");
            $this->color = "color no definido";
        }
        else{
            print("El color ha sido cambiado a $color</br>");
            $this->color = $color;
        }    }
    public function setTamaño($tamaño){
        if(is_numeric($tamaño)){
            echo("<b>ERROR: El tamaño no puede contener numeros</b></br>");
            $this->tamaño = "tamaño no definido";
        }
        else{
            print("El tamaño ha sido cambiado a $tamaño</br>");
            $this->tamaño = $tamaño;
        }    
    }
    public function mostrarPropiedades(){
        echo "Nombre: " . $this->nombre . "</br>";
        echo "Familia: " . $this->familia . "</br>";
        echo "Color: " . $this->color . "</br>";
        echo "Tamaño: " . $this->tamaño . "</br>";
    }
}
?>