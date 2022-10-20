<?php
require_once "bd/connex.php";
extract($_POST);

$sql="DELETE FROM client WHERE id = ?";
$stmt = $pdo->prepare($sql);
if($stmt->execute(array($id))){
    header('Location: client-index.php');
}else{
    print_r($stmt->errorInfo());
}
?>