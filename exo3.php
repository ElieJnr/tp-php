<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adresse Client</title>
</head>

<body>
    <form action="traitement.php" method="POST">
        <label>Nom: <input type="text" name="nom" required></label><br>
        <label>Prénom: <input type="text" name="prenom" required></label><br>
        <label>Adresse: <input type="text" name="adresse" required></label><br>
        <label>Ville: <input type="text" name="ville" required></label><br>
        <label>Code Postal: <input type="text" name="code_postal" required></label><br>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>