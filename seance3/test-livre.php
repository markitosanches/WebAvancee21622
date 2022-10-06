<?php
require_once "class/Livre.php";

$livre = new Livre;
$livre->setMarge(20, 15);
echo $livre->getMarge();

var_dump($livre);
?>