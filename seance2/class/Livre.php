<?php
class Livre {
   public $isbn;
   public $title;
   public $datePublication;
   public $genre;
   public $prix;
   public $description;
   public $cout;
   public $marge;


   public function setMarge($prix, $cout){
      $this->prix = $prix;
      $this->cout = $cout;
      $this->marge = $this->prix - $this->cout;
      
   }

   public function getMarge(){
      return "$ ".$this->marge;
   }
}




?>