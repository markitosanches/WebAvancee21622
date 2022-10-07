<?php

class RedirectPage{

   static public $testProp = "abc";
    
   static public function redirect($url){
        header("Location: $url");
    }
}