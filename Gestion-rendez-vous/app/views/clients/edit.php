<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Client</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-modifier {
            background-color: yellow;
            color: black;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Modifier un Client</h1>
    <form action="index.php?controller=client&action=update&id=<?= $client['id'] ?>" method="post">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" class="form-control" value="<?= $client['nom'] ?>" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" class="form-control" value="<?= $client['prenom'] ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="<?= $client['email'] ?>" required>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone:</label>
            <input type="text" id="telephone" name="telephone" class="form-control" value="<?= $client['telephone'] ?>" required>
        </div>
        <button type="submit" class="btn btn-modifier">Modifier</button>
    </form>
</div>
</body>
</html>