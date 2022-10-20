<?php
require_once "bd/connex.php";
print_r($_POST);

/*$nom = $_POST['nom'];
$adresse = $_POST['adresse'];
$postal_code = $_POST['postal_code'];
$courriel = $_POST['courriel'];
*/

/*
foreach($_POST as $key=>$value){
        $$key = $value;
}
*/

extract($_POST);

//die();


$sql="INSERT INTO client (nom, adresse, postal_code, courriel) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
if($stmt->execute(array($nom, $adresse, $postal_code, $courriel))){
    
    $id = $pdo->lastInsertId();

    header('Location: client-show.php?id='.$id);
}else{
    print_r($stmt->errorInfo());
}