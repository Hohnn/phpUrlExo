<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Exo 4</title>
</head>
<body>
    <a href="index.php?language=PHP&server=WAMP" type="button" class="btn btn-primary">Envoi des paramètres</a>
    <a href="index.php" type="button" class="btn btn-secondary">Retour INDEX</a>
    <?php
    if (!empty($_GET)) {
        if (isset($_GET['language'], $_GET['server'])) { ?>
            <p>language : <?= htmlspecialchars($_GET['language'])  ?> !</p>
            <p>server : <?= htmlspecialchars($_GET['server'] ) ?> !</p>
            <?php
        } else {?>
            <p>Veuiller selectionner "un language et un environnement de développement"</p>
            <?php
        } 
    }?>

</body>
</html>