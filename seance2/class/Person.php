<?php
class Person {
   private $name;
   public $address;
   public $zipCode = "h1h1h1";
   public $phone;
   public $email;


   public function setName($name){
      $this->name = $name;
   }

   public function getName(){
      return "Salut ".$this->name;
   }
}




?>