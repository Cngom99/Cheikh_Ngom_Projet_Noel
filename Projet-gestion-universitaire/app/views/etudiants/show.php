<div class="container">
    <h2>Détails de l'étudiant</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($etudiant['nom'] . ' ' . $etudiant['prenom']); ?></h5>
            <p class="card-text">
                <strong>Email:</strong> <?php echo htmlspecialchars($etudiant['email']); ?><br>
                <strong>Filière:</strong> <?php echo htmlspecialchars($etudiant['filiere']); ?>
            </p>
            <a href="?action=edit&id=<?php echo $etudiant['id']; ?>" class="btn btn-modifier">Modifier</a>
            <a href="index.php" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>