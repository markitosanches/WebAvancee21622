<?php
require_once "class/Person.php";

$obj = new Person;
//method
$obj->setName("Lisa");

echo $obj->getName();

//prop
echo "<br>";
$obj2 =  new Person;
echo $obj2->name = "Paul";



?>