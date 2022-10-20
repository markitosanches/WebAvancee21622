<?php
if(isset($_GET['id'])){
    require_once "bd/connex.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM client WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($id));

    $count = $stmt->rowCount();

    if($count!=1){
        header('Location: client-index.php');
    }

    $client = $stmt->fetch();

    //echo $client['nom'];
    extract($client);
    //echo $nom;
}else{
    header('Location: client-index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <p><strong>Nom :</strong><?php echo $nom; ?></p>
        <p><strong>Adresse :</strong><?php echo $adresse; ?></p>
        <p><strong>Postal Code :</strong><?php echo $postal_code; ?></p>
        <p><strong>Courriel : </strong><?php echo $courriel; ?></p>
        <p><a href="client-edit.php?id=<?php echo $id; ?>">Modifier</a></p>
    </main>
</body>
</html>