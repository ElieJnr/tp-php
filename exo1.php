<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $personnes = [
        "Jean" => ["Prénom" => "Elie", "Ville" => "Paris", "Âge" => 24],
        "Marie" => ["Prénom" => "Junior", "Ville" => "Lyon", "Âge" => 24],
        "Paul" => ["Prénom" => "James", "Ville" => "Akron", "Âge" => 40],
    ];

    foreach ($personnes as $nom => $infos) {
        echo "Nom : $nom<br>";
        foreach ($infos as $cle => $valeur) {
            echo "$cle : $valeur<br>";
        }
        echo "<br>";
    }
    ?>
</body>

</html>