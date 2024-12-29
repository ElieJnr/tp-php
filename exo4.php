<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $budget = 10000;
    $achats = 20000;

    if ($budget >= $achats) {
        echo "Le budget permet de payer les achats.";
    } else {
        echo "Le budget ne permet pas de payer les achats.";
    }
    ?>
</body>

</html>