<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Afficher un cours</title>
    </head>
    <body>
        <h1>Détails du cours</h1>
        <p>ID: <?= $cours['id'] ?></p>
        <p>Nom: <?= $cours['nom'] ?></p>
        <p>Code: <?= $cours['code'] ?></p>
        <p>Heures: <?= $cours['heures'] ?></p>
        <a href="index.php?controller=cours&action=index">Retour à la liste</a>
    </body>
</html>