<?php

require_once "Person.php";

class Student extends Person {
    private $idStudent;
 
    public function __construct($name, $address = null, $zipCode = null, $phone = null, $email = null){
        $this->name = $name;
        $this->address = $address;
        $this->zipCode = $zipCode;
        $this->phone = $phone;
        $this->email = $email;
    
        }
    
        public function getProp(){
            return "<br>Student Id: ".$this->idStudent.
            "<br>Student Name: ".$this->name.
            "<br>Student Address: ".$this->address.
            "<br>Student Zip Code: ".$this->zipCode.
            "<br>Student Phone: ".$this->phone.
            "<br>Student Email: ".$this->email;
        }

}
?>