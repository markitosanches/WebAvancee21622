<?php

function divide($dividend, $divisor){
    if($divisor == 0){
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

try {
    echo divide (5, 0);
}catch(Exception $e){
    echo "Unable to divide";
    //var_dump($e);
    echo "<br>".$e->getMessage();
    echo "<br>".$e->getCode();
    echo "<br>".$e->getFile();
    echo "<br>".$e->getLine();
} finally {
    echo "<br>Finit";
}


?>