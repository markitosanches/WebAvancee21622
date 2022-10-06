<?php

require_once "Person.php";

class Teacher extends Person {
    private $idTeacher;
    private $salary;
  
  public function __construct($name, $address = null, $zipCode = null, $phone = null, $email = null, $idTeacher = null, $salary = null){
    $this->name = $name;
    $this->address = $address;
    $this->zipCode = $zipCode;
    $this->phone = $phone;
    $this->email = $email;
    $this->idTeacher = $idTeacher;
    $this->salary = $salary;

    }

    public function getProp(){
        return "<br>Teacher Id: ".$this->idTeacher.
        "<br>Teacher Name: ".$this->name.
        "<br>Teacher Address: ".$this->address.
        "<br>Teacher Zip Code: ".$this->zipCode.
        "<br>Teacher Phone: ".$this->phone.
        "<br>Teacher Email: ".$this->email.
        "<br>Teacher Salary: ".$this->salary;
    }
  
}
?>