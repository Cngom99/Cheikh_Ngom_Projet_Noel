<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des Clients</title>
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
        .btn-ajouter {
            border: 2px solid blue;
            color: blue;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Liste des Clients</h1>
    <a href="index.php?controller=client&action=create" class="btn btn-ajouter mb-3">Ajouter un Client</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($clients as $client): ?>
            <tr>
                <td><?= $client['id'] ?></td>
                <td><?= $client['nom'] ?></td>
                <td><?= $client['prenom'] ?></td>
                <td><?= $client['email'] ?></td>
                <td><?= $client['telephone'] ?></td>
                <td>
                    <a href="index.php?controller=client&action=edit&id=<?= $client['id'] ?>" class="btn btn-modifier">Modifier</a>
                    <a href="index.php?controller=client&action=delete&id=<?= $client['id'] ?>" class="btn btn-supprimer">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>