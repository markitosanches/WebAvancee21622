<?php
require_once "bd/connex.php";
//print_r($_POST);
//die();
extract($_POST);


$sql="UPDATE client SET nom = ?, adresse = ?, postal_code = ?, courriel = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
if($stmt->execute(array($nom, $adresse, $postal_code, $courriel, $id))){
    header('Location: client-show.php?id='.$id);
}else{
    print_r($stmt->errorInfo());
}