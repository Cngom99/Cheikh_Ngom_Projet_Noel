<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un étudiant</title>
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
    <h1 class="mb-4">Ajouter un étudiant</h1>
    <form action="index.php?controller=etudiant&action=store" method="post">
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
            <label for="filiere">Filière:</label>
            <input type="text" id="filiere" name="filiere" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-ajouter">Ajouter</button>
    </form>
</div>
</body>
</html>