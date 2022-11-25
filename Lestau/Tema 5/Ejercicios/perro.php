<?php
require_once 'animal.php';
// if not exists the file, print an error message
if(!file_exists("animal.php")){
    echo("<b>ERROR: El archivo animal.php no existe</b></br>");
    break;
}

class Perro extends Animal{
    protected $raza;
    // constructor
    public function __construct($nombre, $familia, $raza, $color, $tamaño){
        parent::__construct($nombre, $familia, $color, $tamaño);
        $this->raza = $raza;
    }
    // getters
    public function getRaza(){
        return $this->raza;
    }
    // setters
    public function setRaza($raza){
        if(is_numeric($raza)){
            echo("<b>ERROR: La raza no puede contener numeros</b></br>");
            $this->raza = "raza no definida";
        }
        else{
            print("La raza ha sido cambiada a $raza</br>");
            $this->raza = $raza;
        }
    }
    public function hablar(){
        echo "Guau guau, soy " . $this->nombre . " y soy un perro de raza " . $this->raza . " de color " . $this->color . " y de tamaño " . $this->tamaño . "</br>";
    }
    public function mostrarPropiedades()
    {
        echo "Nombre: " . $this->nombre . "</br>";
        echo "Familia: " . $this->familia . "</br>";
        echo "Raza: " . $this->raza . "</br>";
        echo "Color: " . $this->color . "</br>";
        echo "Tamaño: " . $this->tamaño . "</br>";
    }
}
$miPerro = new Perro("Hur","Perro", "Labrador", "Blanco", "mu grande");
$miPerro->mostrarPropiedades();
$miPerro->hablar();

$miPerro->setNombre("Yogur");
$miPerro->setRaza("Pastor Aleman");
$miPerro->mostrarPropiedades();

$miMono = new Animal("Monin", "Mono", "Marrón", "Mediano");
$miMono->mostrarPropiedades();
?>
