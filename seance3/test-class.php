<?php
require_once "class/Person.php";

$obj1 = new Person();
$obj1->name = "Peter";
$obj1->zipCode = "H2h2h2";
echo "<pre>";
var_dump($obj1);
echo "</pre>";
echo $obj1->name;

$obj2 = new Person();

print_r($obj2);

$peter = new Person();
$peter->name = "Peter";
echo "<br>".$peter->name."<br>";

$lisa = new Person();
$lisa->name = "Lisa";
echo "<br>".$lisa->name."<br>";


?>