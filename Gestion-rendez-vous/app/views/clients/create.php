<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Client</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-ajouter {
            border: 2px solid blue;
            color: blue;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Ajouter un Client</h1>
    <form action="index.php?controller=client&action=store" method="post">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone:</label>
            <input type="text" id="telephone" name="telephone" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-ajouter">Ajouter</button>
    </form>
</div>
</body>
</html>