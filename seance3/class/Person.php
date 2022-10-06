<?php
abstract class Person {
   protected $name;
   public $address;
   public $zipCode;
   public $phone;
   public $email;

public function __construct($name, $address = null, $zipCode = "h2h2h2"){
      $this->name = $name;
      $this->address = $address;
      $this->zipCode = $zipCode;

   }

   public function setName($name){
      $this->name = $name;
   }

   public function getName(){
      return "Salut ".$this->name;
   }

   public function constMagic(){
      return "<br>Nom de la classe : ".__CLASS__."<br>Nom du fichier :".__FILE__."<br> Ligne :".__LINE__."<br> Methode :".__METHOD__."<br>";
   }

   /*
   public function __destruct()
   {
      echo "Destruct".$this->name;
   }
   */
}




?>