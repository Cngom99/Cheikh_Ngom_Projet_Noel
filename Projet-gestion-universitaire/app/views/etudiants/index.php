<h2>Liste des Étudiants</h2>
<a href="?action=create" class="btn btn-ajouter mb-3">Ajouter un étudiant</a>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Filière</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($etudiant = pg_fetch_assoc($etudiants)) : ?>
        <tr>
            <td><?php echo htmlspecialchars($etudiant['id']); ?></td>
            <td><?php echo htmlspecialchars($etudiant['nom']); ?></td>
            <td><?php echo htmlspecialchars($etudiant['prenom']); ?></td>
            <td><?php echo htmlspecialchars($etudiant['email']); ?></td>
            <td><?php echo htmlspecialchars($etudiant['filiere']); ?></td>
            <td>
                <a href="?action=show&id=<?php echo $etudiant['id']; ?>" class="btn btn-voir btn-sm">Voir</a>
                <a href="?action=edit&id=<?php echo $etudiant['id']; ?>" class="btn btn-modifier btn-sm">Modifier</a>
                <a href="?action=delete&id=<?php echo $etudiant['id']; ?>" class="btn btn-supprimer btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">Supprimer</a>
            </td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>