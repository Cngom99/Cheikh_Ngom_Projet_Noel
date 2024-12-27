<div class="container">
    <h2>Modifier l'étudiant</h2>
    <form action="?action=edit&id=<?php echo $etudiant['id']; ?>" method="POST" class="needs-validation" novalidate>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?php echo htmlspecialchars($etudiant['nom']); ?>" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo htmlspecialchars($etudiant['prenom']); ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($etudiant['email']); ?>" required>
        </div>
        <div class="form-group">
            <label for="filiere">Filière</label>
            <input type="text" class="form-control" id="filiere" name="filiere" value="<?php echo htmlspecialchars($etudiant['filiere']); ?>" required>
        </div>
        <button type="submit" class="btn btn-modifier">Mettre à jour</button>
        <a href="index.php" class="btn btn-secondary">Annuler</a>
    </form>
</div>