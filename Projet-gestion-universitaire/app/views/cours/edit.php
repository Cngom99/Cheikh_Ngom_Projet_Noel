<h2>Modifier le cours</h2>
<form action="?page=cours&action=edit&id=<?php echo $cours_unique['id']; ?>" method="POST">
    <div class="form-group">
        <label for="heures">Heures</label>
        <input type="number" class="form-control" id="heures" name="heures"
               value="<?php echo htmlspecialchars($cours_unique['heures']); ?>" required>
    </div>
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom"
               value="<?php echo htmlspecialchars($cours_unique['nom']); ?>" required>
    </div>
    <div class="form-group">
        <label for="code">Code</label>
        <input type="text" class="form-control" id="code" name="code"
               value="<?php echo htmlspecialchars($cours_unique['code']); ?>" required>
    </div>
    <button type="submit" class="btn btn-modifier">Mettre à jour</button>
    <a href="?page=cours" class="btn btn-secondary">Annuler</a>
</form>