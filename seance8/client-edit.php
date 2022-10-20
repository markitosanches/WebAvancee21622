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
    extract($client);
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
    <style>
        input{
            display: block;
            margin: 5px;
        }
    </style>
</head>
<body>
<main>
    <h2>Modifier</h2>
        <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <label>Nom 
                <input type="text" name="nom" value="<?php echo $nom;?>">
            </label>
            <label>Adresse
                <input type="text" name="adresse" value="<?php echo $adresse;?>">
            </label>
            <label>Postal Code
                <input type="text" name="postal_code" value="<?php echo $postal_code;?>">
            </label>
            <label>Courriel
                <input type="email" name="courriel" value="<?php echo $courriel;?>">
            </label>
            <input type="submit" value="Modifier">
        </form>
        <form action="client-delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="submit" value="Effacer">
        </form>
    </main>
    
</body>
</html>