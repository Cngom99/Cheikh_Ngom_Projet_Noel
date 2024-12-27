<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier un rendez-vous</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Modifier un rendez-vous</h1>
    <?php if (isset($rendezVous)): ?>
        <form action="index.php?controller=rendezvous&action=update&id=<?= htmlspecialchars($rendezVous['id']) ?>" method="post">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" class="form-control" value="<?= htmlspecialchars($rendezVous['date']) ?>" required>
            </div>
            <div class="form-group">
                <label for="heure">Heure:</label>
                <input type="time" id="heure" name="heure" class="form-control" value="<?= htmlspecialchars($rendezVous['heure']) ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control" required><?= htmlspecialchars($rendezVous['description']) ?></textarea>
            </div>
            <div class="form-group">
                <label for="client">Client:</label>
                <select id="client" name="client_id" class="form-control" required>
                    <?php foreach ($clients as $client): ?>
                        <option value="<?= htmlspecialchars($client['id']) ?>" <?= $client['id'] == $rendezVous['client_id'] ? 'selected' : '' ?>><?= htmlspecialchars($client['nom'] . ' ' . $client['prenom']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Modifier</button>
        </form>
    <?php else: ?>
        <p>Rendez-vous non trouvé.</p>
    <?php endif; ?>
    <a href="index.php?controller=rendezvous&action=index" class="btn btn-primary">Retour à la liste</a>
</div>
</body>
</html>