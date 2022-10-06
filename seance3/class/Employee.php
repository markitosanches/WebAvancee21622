<?php
require_once "Person.php";

class Employee extends Person {
    public $salaire;
    public $jobTitle;

    public function __construct($name){
        $this->name = $name;
    }

}



?>