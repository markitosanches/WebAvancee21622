<?php

require_once "class/Employee.php";


$emp = new Employee("Lisa");

//$emp->setName("Lisa");

var_dump($emp);

echo $emp->constMagic();