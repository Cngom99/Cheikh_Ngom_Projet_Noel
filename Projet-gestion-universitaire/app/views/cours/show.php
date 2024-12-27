<h2>Détails du cours</h2>

<div class="card">
    <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($cours_unique['nom']); ?></h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <strong>ID:</strong> <?php echo htmlspecialchars($cours_unique['id']); ?>
            </li>
            <li class="list-group-item">
                <strong>Heures:</strong> <?php echo htmlspecialchars($cours_unique['heures']); ?>
            </li>
            <li class="list-group-item">
                <strong>Nom:</strong> <?php echo htmlspecialchars($cours_unique['nom']); ?>
            </li>
            <li class="list-group-item">
                <strong>Code:</strong> <?php echo htmlspecialchars($cours_unique['code']); ?>
            </li>
        </ul>
    </div>
    <div class="card-footer">
        <a href="?page=cours&action=edit&id=<?php echo $cours_unique['id']; ?>" class="btn btn-modifier">Modifier</a>
        <a href="?page=cours" class="btn btn-secondary">Retour</a>
    </div>
</div>