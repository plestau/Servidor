<?php
include_once "contador.php";

class Ocurrencia extends CuentaLetras{
    private $letra;
    private $nveces;

    public function __construct($letra, $nveces)
    {
        //acedemos a las variables de la clase anterior
        $this->letra = $letra;
        $this->nveces = $nveces;
    }

    public function getLetra(){
        return $this->letra;
    }

    public function getNveces(){
        return $this->nveces;
    }

    public function incrementa(){
        $this->nveces++;
    }

    public function __toString()
    {
        return $this->letra . " = " . $this->nveces;
    }
}
?>