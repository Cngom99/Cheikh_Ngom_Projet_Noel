<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Détails du rendez-vous</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Détails du rendez-vous</h1>
    <?php if ($rendezVous): ?>
        <p><strong>ID:</strong> <?= htmlspecialchars($rendezVous['id']) ?></p>
        <p><strong>Date:</strong> <?= htmlspecialchars($rendezVous['date']) ?></p>
        <p><strong>Heure:</strong> <?= htmlspecialchars($rendezVous['heure']) ?></p>
        <p><strong>Description:</strong> <?= htmlspecialchars($rendezVous['description']) ?></p>
        <p><strong>Client:</strong> <?= htmlspecialchars($rendezVous['client']) ?></p>
    <?php else: ?>
        <p>Aucun rendez-vous trouvé.</p>
    <?php endif; ?>
    <a href="index.php?controller=rendezvous&action=index" class="btn btn-primary">Retour à la liste</a>
</div>
</body>
</html>