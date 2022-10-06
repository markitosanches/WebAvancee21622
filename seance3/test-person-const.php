<?php
require_once "class/Person.php";


$obj1 = new Person("Peter", "Pie Ix", "h3h3h3");

var_dump($obj1);

// PRIVATE echo "<br>Nom: ".$obj1->name."<br>";
echo "<br>Address: ".$obj1->address."<br>";
echo "<br>Code Postal: ".$obj1->zipCode."<br>";

echo $obj1->constMagic();

