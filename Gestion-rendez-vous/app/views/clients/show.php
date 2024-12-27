<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Afficher un Client</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Détails du Client</h1>
    <p><strong>ID:</strong> <?= $client['id'] ?></p>
    <p><strong>Nom:</strong> <?= $client['nom'] ?></p>
    <p><strong>Prénom:</strong> <?= $client['prenom'] ?></p>
    <p><strong>Email:</strong> <?= $client['email'] ?></p>
    <p><strong>Téléphone:</strong> <?= $client['telephone'] ?></p>
    <a href="index.php?controller=client&action=index" class="btn btn-primary">Retour à la liste</a>
</div>
</body>
</html>