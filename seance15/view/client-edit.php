<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ path }}css/style.css">
</head>
<body>
<main>
    <h2>Modifier </h2>
        <form action="{{ path }}client/update" method="post">
            <input type="hidden" name="id" value="{{ client.id }}">
            <label>Nom 
                <input type="text" name="nom" value="{{ client.nom}}">
            </label>
            <label>Adresse
                <input type="text" name="adresse" value="{{ client.adresse}}">
            </label>
            <label>Postal Code
                <input type="text" name="postal_code" value="{{ client.postal_code}}">
            </label>
            <label>Courriel
                <input type="email" name="courriel" value="{{ client.courriel}}">
            </label>
            <input type="submit" value="Modifier">
        </form>
        <form action="{{ path }}client/delete" method="post">
            <input type="hidden" name="id" value="{{ client.id}}">
            <input type="submit" value="Effacer">
        </form>
    </main>
    
</body>
</html>