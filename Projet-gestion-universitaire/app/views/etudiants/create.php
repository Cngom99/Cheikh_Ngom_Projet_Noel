<div class="container">
    <h2>Ajouter un nouvel étudiant</h2>
    <form action="?action=create" method="POST" class="needs-validation" novalidate>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="filiere">Filière</label>
            <input type="text" class="form-control" id="filiere" name="filiere" required>
        </div>
        <button type="submit" class="btn btn-ajouter">Enregistrer</button>
        <a href="index.php" class="btn btn-secondary">Annuler</a>
    </form>
</div>