<?php

class RequirePage{
    static public function requireModel($model){
        return require_once "model/$model.php";
    }
}

?>