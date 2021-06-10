<?php
$phrase = '';
    if (!empty($_GET)) {
        if (isset($_GET['age'], $_GET['gender'])) {
            if ($_GET['age'] < 18) {
                if ($_GET['gender'] == 'homme') {
                    $phrase = 'Vous êtes un homme mineur';
                } elseif ($_GET['gender'] == 'femme') { 
                    $phrase = 'Vous êtes un femme mineur';
            } elseif ($_GET['age'] >= 18) {
                if ($_GET['gender'] == 'homme') {
                    $phrase = 'Vous êtes un homme majeur';
                } elseif ($_GET['gender'] == 'femme') { 
                    $phrase = 'Vous êtes un femme majeur';
                    }
                }
            } 
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Exo 6</title>
</head>
<body>
    <a href="index.php?age=17&gender=homme" type="button" class="btn btn-primary">Envoi des paramètres</a>
    <a href="index.php" type="button" class="btn btn-secondary">Retour INDEX</a>
    <p><?= $phrase ?></p>

</body>
</html>