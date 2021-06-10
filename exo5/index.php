<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Exo 5</title>
</head>
<body>
    <a href="index.php?day=2&month=6" type="button" class="btn btn-primary">Envoi des paramètres</a>
    <a href="index.php" type="button" class="btn btn-secondary">Retour INDEX</a>
    <?php
    if (!empty($_GET)) {
        if (isset($_GET['day'], $_GET['month'])) { 
            $days = ['Lundi', 'Mardi', 'Mercredi', 'jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
            $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'] ?>
            <p><?= $days[$_GET['day']-1]?> = <?= htmlspecialchars($_GET['day']) ?>, <?= $months[$_GET['month']-1]?> = <?= htmlspecialchars($_GET['month']) ?></p>
            <?php
        }
    }?>

</body>
</html>