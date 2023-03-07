<?php

class Calculadora{
    public function sum($a, $b){
        if($a === null || $b === null || !is_numeric($a) || !is_numeric($b)) throw new InvalidArgumentException("Valores no numéricos");
        return $a + $b;
    }
    public function sub($a, $b){
        if($a === null || $b === null || !is_numeric($a) || !is_numeric($b)) throw new InvalidArgumentException("Valores no numéricos");
        return $a - $b;
    }
    public function mul($a, $b){
        if($a === null || $b === null || !is_numeric($a) || !is_numeric($b)) throw new InvalidArgumentException("Valores no numéricos");
        return $a * $b;
    }
    public function div($a, $b){
        if($a === null || $b === null || !is_numeric($a) || !is_numeric($b)) throw new InvalidArgumentException("Valores no numéricos");
        if($b == 0) throw new DivisionByZeroError("No se puede dividir entre 0");
        return $a / $b;
    }
}
?>