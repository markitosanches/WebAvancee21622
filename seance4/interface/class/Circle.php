<?php
require_once 'Shape.php';

class Circle implements Shape{
    private $radius;

    public function __construct($radius){
        $this-> radius = $radius;
    }

    public function calcArea(){
        return "L'aire du cercle est :".$this->radius * $this->radius*pi(); 
    }
}