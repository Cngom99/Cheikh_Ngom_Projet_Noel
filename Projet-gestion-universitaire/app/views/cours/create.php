<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un cours</title>
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
    <h1 class="mb-4">Ajouter un cours</h1>
    <form action="index.php?controller=cours&action=store" method="post">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" id="code" name="code" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="heures">Heures:</label>
            <input type="number" id="heures" name="heures" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-ajouter">Ajouter</button>
    </form>
</div>
</body>
</html>