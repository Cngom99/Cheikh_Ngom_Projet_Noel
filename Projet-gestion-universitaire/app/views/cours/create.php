<h2>Ajouter un nouveau cours</h2>
<form action="?page=cours&action=create" method="POST">
    <div class="form-group">
        <label for="heures">Heures</label>
        <input type="number" class="form-control" id="heures" name="heures" required>
    </div>
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
    </div>
    <div class="form-group">
        <label for="code">Code</label>
        <input type="text" class="form-control" id="code" name="code" required>
    </div>
    <button type="submit" class="btn btn-ajouter">Enregistrer</button>
    <a href="?page=cours" class="btn btn-secondary">Annuler</a>
</form>