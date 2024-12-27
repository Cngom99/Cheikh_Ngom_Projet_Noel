<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des rendez-vous</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Liste des rendez-vous</h1>
    <a href="index.php?controller=rendezvous&action=create" class="btn btn-primary mb-3">Ajouter un rendez-vous</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Description</th>
            <th>Client</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($rendezVous)): ?>
            <?php foreach ($rendezVous as $rdv): ?>
                <tr>
                    <td><?= htmlspecialchars($rdv['id']) ?></td>
                    <td><?= htmlspecialchars($rdv['date']) ?></td>
                    <td><?= htmlspecialchars($rdv['heure']) ?></td>
                    <td><?= htmlspecialchars($rdv['description']) ?></td>
                    <td><?= htmlspecialchars($rdv['client']) ?></td>
                    <td>
                        <a href="index.php?controller=rendezvous&action=edit&id=<?= htmlspecialchars($rdv['id']) ?>" class="btn btn-warning">Modifier</a>
                        <a href="index.php?controller=rendezvous&action=delete&id=<?= htmlspecialchars($rdv['id']) ?>" class="btn btn-danger">Supprimer</a>
                        <a href="index.php?controller=rendezvous&action=show&id=<?= htmlspecialchars($rdv['id']) ?>" class="btn btn-info">Voir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Aucun rendez-vous trouvé.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>