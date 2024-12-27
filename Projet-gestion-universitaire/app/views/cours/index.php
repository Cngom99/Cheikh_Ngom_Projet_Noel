<h2>Liste des Cours</h2>
<a href="?page=cours&action=create" class="btn btn-ajouter mb-3">Ajouter un cours</a>

<table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Heures</th>
        <th>Nom</th>
        <th>Code</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if($cours) {
        while($row = pg_fetch_assoc($cours)) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['heures']); ?></td>
                <td><?php echo htmlspecialchars($row['nom']); ?></td>
                <td><?php echo htmlspecialchars($row['code']); ?></td>
                <td>
                    <a href="?page=cours&action=show&id=<?php echo $row['id']; ?>" class="btn btn-voir btn-sm">Voir</a>
                    <a href="?page=cours&action=edit&id=<?php echo $row['id']; ?>" class="btn btn-modifier btn-sm">Modifier</a>
                    <a href="?page=cours&action=delete&id=<?php echo $row['id']; ?>"
                       class="btn btn-supprimer btn-sm"
                       onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce cours ?')">Supprimer</a>
                </td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>