<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Afficher un étudiant</title>
    </head>
    <body>
        <h1>Détails de l'étudiant</h1>
        <p>ID: <?= $etudiant['id'] ?></p>
        <p>Nom: <?= $etudiant['nom'] ?></p>
        <p>Prénom: <?= $etudiant['prenom'] ?></p>
        <p>Email: <?= $etudiant['email'] ?></p>
        <p>Filière: <?= $etudiant['filiere'] ?></p>
        <a href="index.php?controller=etudiant&action=index">Retour à la liste</a>
    </body>
</html>