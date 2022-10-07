<?php
require_once 'Shape.php';

class Rectangle implements Shape{
    private $width;
    private $height;

    public function __construct($width, $height){
        $this-> width = $width;
        $this-> height = $height;
    }

    public function calcArea(){
        return "L'aire du rectangle est : ".$this-> width * $this-> height;
    }
}