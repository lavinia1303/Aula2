<?php

class Triangulo {
    public float $base;
    public float $altura;
    public float $area;

    public function __construct($base, $altura){
        $this-> base= $base;
        $this-> altura= $altura;
        $this-> area= $this->calcularArea();
    }

    public function calcularArea(){
        return ($this->base * $this-> altura) / 2;
    }
}
$triangulo1= new Triangulo (4, 5);

echo "<pre>";
print_r($triangulo1);

echo "</pre>";