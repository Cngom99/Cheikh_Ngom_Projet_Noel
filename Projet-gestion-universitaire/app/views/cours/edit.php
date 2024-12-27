<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier un cours</title>
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
    <h1 class="mb-4">Modifier un cours</h1>
    <form action="index.php?controller=cours&action=update&id=<?= $cours['id'] ?>" method="post">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" class="form-control" value="<?= $cours['nom'] ?>" required>
        </div>
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" id="code" name="code" class="form-control" value="<?= $cours['code'] ?>" required>
        </div>
        <div class="form-group">
            <label for="heures">Heures:</label>
            <input type="number" id="heures" name="heures" class="form-control" value="<?= $cours['heures'] ?>" required>
        </div>
        <button type="submit" class="btn btn-modifier">Modifier</button>
    </form>
</div>
</body>
</html>