<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $articles = [
        "ACER 6200" => ["TVA" => 0.18, "Prix_HTVA" => 1028.49, "Quantité" => 11],
        "TOSHIBA 4002" => ["TVA" => 0.20, "Prix_HTVA" => 1226.94, "Quantité" => 8],
        "PAPIER A4" => ["TVA" => 0.18, "Prix_HTVA" => 8.66, "Quantité" => 214],
    ];

    $totalVentes = 0;
    echo "<table border='1'>";
    echo "<tr><th>Article</th><th>Quantité</th><th>Prix TVAC</th><th>Valeur</th></tr>";
    foreach ($articles as $nom => $details) {
        $prixTVAC = $details["Prix_HTVA"] * (1 + $details["TVA"]);
        $valeur = $prixTVAC * $details["Quantité"];
        $totalVentes += $valeur;

        echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>{$details['Quantité']}</td>";
        echo "<td>" . number_format($prixTVAC, 2) . "</td>";
        echo "<td>" . number_format($valeur, 2) . "</td>";
        echo "</tr>";
    }
    echo "<tr><td colspan='3'>Total des ventes</td><td>" . number_format($totalVentes, 2) . "</td></tr>";
    echo "</table>";
    ?>

</body>

</html>