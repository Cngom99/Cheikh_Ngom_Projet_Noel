<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Rendez-vous</title>
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
    <h1 class="mb-4">Ajouter un Rendez-vous</h1>
    <form action="index.php?controller=rendezvous&action=store" method="post">
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="heure">Heure:</label>
            <input type="time" id="heure" name="heure" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="client_id">Client:</label>
            <select id="client_id" name="client_id" class="form-control" required>
                <?php foreach ($clients as $client): ?>
                    <option value="<?= $client['id'] ?>"><?= $client['nom'] . ' ' . $client['prenom'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-ajouter">Ajouter</button>
    </form>
</div>
</body>
</html>