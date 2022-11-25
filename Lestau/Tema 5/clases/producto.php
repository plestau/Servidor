<?php
    class producto{
        private $id;
        private $nombre;
        private $peso;
        private $color;
        private $precio;
        public static $numProductos = 0;

        public function __construct($n, $p, $c, $pr = 1.0)
        {
            // Cómo acceder a atributos de una clase
            $this->nombre=$n;
            $this->peso=$p;
            $this->color=$c;
            $this->precio=$pr;
            $this->id=$this::$numProductos;
            $this::$numProductos +=1;
        }
        
        // getter y setter en php
        public function getNProd(){
            // Cómo acceder a atributos estáticos
            return $this::$numProductos;
        }

        public function setNProd($id){
            $this::$numProductos = $id;
        }

        public function getID(){
            return $this->id;
        }

        // Método estático
        public static function metodo1(){
            echo "Hola, soy un método estático </br>";
            //<---$this->nombre=$nom; <--- Error
        }
    }

    // echo "El valor de latributo estático es: " . producto::$numProductos . "</br>";
    
    // Llamada a un método estático
    producto::metodo1("Caramelos");

    $p1 = new producto("Chicles", 0.20, "Rojo", 0.25);
    echo $p1->getID() . "</br>";

    $p2 = new producto("Piruletas", 1, "Verde");
    echo $p2->getID() . "</br>";

    echo $p1->getNProd() . "</br>";
    echo $p2->getNProd() . "</br>";
    
?>