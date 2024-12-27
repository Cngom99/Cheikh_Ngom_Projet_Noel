<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-modifier {
            background-color: yellow;
            color: black;
        }
        .btn-supprimer {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Liste des étudiants</h1>
    <a href="index.php?controller=etudiant&action=create" class="btn btn-ajouter mb-3">Ajouter un étudiant</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Filière</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($etudiants as $etudiant): ?>
            <tr>
                <td><?= $etudiant['id'] ?></td>
                <td><?= $etudiant['nom'] ?></td>
                <td><?= $etudiant['prenom'] ?></td>
                <td><?= $etudiant['email'] ?></td>
                <td><?= $etudiant['filiere'] ?></td>
                <td>
                    <a href="index.php?controller=etudiant&action=edit&id=<?= $etudiant['id'] ?>" class="btn btn-modifier">Modifier</a>
                    <a href="index.php?controller=etudiant&action=delete&id=<?= $etudiant['id'] ?>" class="btn btn-supprimer">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>