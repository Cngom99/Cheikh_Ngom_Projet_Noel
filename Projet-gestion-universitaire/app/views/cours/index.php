<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des cours</title>
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
    <h1 class="mb-4">Liste des cours</h1>
    <a href="index.php?controller=cours&action=create" class="btn btn-ajouter mb-3">Ajouter un cours</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Code</th>
            <th>Heures</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cours as $cours): ?>
            <tr>
                <td><?= $cours['id'] ?></td>
                <td><?= $cours['nom'] ?></td>
                <td><?= $cours['code'] ?></td>
                <td><?= $cours['heures'] ?></td>
                <td>
                    <a href="index.php?controller=cours&action=edit&id=<?= $cours['id'] ?>" class="btn btn-modifier">Modifier</a>
                    <a href="index.php?controller=cours&action=delete&id=<?= $cours['id'] ?>" class="btn btn-supprimer">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>