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
        <h1>List de client</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Postal Code</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "bd/connex.php";
                    $sql = "SELECT nom, adresse, postal_code FROM client ORDER BY nom;";
                    $stmt = $pdo->query($sql);

                    foreach($stmt as $row){
                       // print_r($row);
                       // echo "<br>";
                ?>
                    <tr>
                        <td><?php echo $row['nom'] ?></td>
                        <td><?php echo $row['adresse'] ?></td>
                        <td><?php echo $row['postal_code'] ?></td>
                    </tr>
                <?php       
                    }
                ?>
                

            </tbody>
        </table>
    </main>
</body>
</html>