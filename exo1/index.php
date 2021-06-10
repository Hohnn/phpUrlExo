<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Exo 1</title>
</head>
<body>
    <a href="index.php?lastname=Tutor&firstname=Janine" type="button" class="btn btn-primary">Envoi des paramètres</a>
    <a href="index.php" type="button" class="btn btn-secondary">Retour INDEX</a>
    <?php 
    if (isset($_GET['lastname'], $_GET['firstname'])) { ?>
        <p>Param1 : <?= htmlspecialchars($_GET['lastname'])  ?> !</p>
        <p>Param2 : <?= htmlspecialchars($_GET['firstname']) ?> !</p>
        <?php
    }
    ?>
</body>
</html>