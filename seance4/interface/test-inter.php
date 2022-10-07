<?php

require_once "class/Circle.php";
require_once "class/Rectangle.php";

echo "<h4>Circle</h4>";
$cir = new Circle(2);
echo $cir->calcArea();

echo "<h4>Rectangle</h4>";
$rect = new Rectangle(2, 2);
echo $rect->calcArea();