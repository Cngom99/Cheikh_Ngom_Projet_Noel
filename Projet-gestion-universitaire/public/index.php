<?php
session_start();
require_once '../app/database.php';

$current_date = "2024-12-27 14:33:52";
$current_user = "Cngom99";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestion Universitaire</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            padding-top: 20px;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .btn-modifier {
            background-color: #ffc107;
            border-color: #ffc107;
        }
        .btn-supprimer {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }
        .btn-voir {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
        }
        .btn-ajouter {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="index.php">Gestion Universitaire</a>
        <div class="navbar-nav">
            <a class="nav-item nav-link <?php echo (!isset($_GET['page']) || $_GET['page'] == 'etudiants') ? 'active' : ''; ?>"
               href="index.php?page=etudiants">Étudiants</a>
            <a class="nav-item nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'cours') ? 'active' : ''; ?>"
               href="index.php?page=cours">Cours</a>
        </div>
        <div class="ml-auto text-white">
            <small>
                Utilisateur: <?php echo htmlspecialchars($current_user); ?><br>
                Date: <?php echo htmlspecialchars($current_date); ?>
            </small>
        </div>
    </nav>

    <?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'etudiants';
    $action = isset($_GET['action']) ? $_GET['action'] : 'index';

    // Initialisation des variables pour les vues
    $etudiants = null;
    $etudiant = null;
    $cours = null;
    $cours_unique = null;

    switch($page) {
        case 'etudiants':
            require_once '../app/controllers/EtudiantController.php';
            switch($action) {
                case 'create':
                    require_once '../app/views/etudiants/create.php';
                    break;
                case 'edit':
                    if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $etudiant = pg_query($conn, "SELECT * FROM etudiants WHERE id = $id");
                        $etudiant = pg_fetch_assoc($etudiant);
                    }
                    require_once '../app/views/etudiants/edit.php';
                    break;
                case 'show':
                    if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $etudiant = pg_query($conn, "SELECT * FROM etudiants WHERE id = $id");
                        $etudiant = pg_fetch_assoc($etudiant);
                    }
                    require_once '../app/views/etudiants/show.php';
                    break;
                case 'delete':
                    if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                        pg_query($conn, "DELETE FROM etudiants WHERE id = $id");
                        header('Location: index.php?page=etudiants');
                    }
                    break;
                default:
                    $etudiants = pg_query($conn, "SELECT * FROM etudiants ORDER BY id");
                    require_once '../app/views/etudiants/index.php';
                    break;
            }
            break;

        case 'cours':
            switch($action) {
                case 'create':
                    if($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $nom = $_POST['nom'];
                        $code = $_POST['code'];
                        $heures = $_POST['heures']; // Changé de 'heure' à 'heures'

                        $query = "INSERT INTO cours (nom, code, heures) VALUES ($1, $2, $3)";
                        if(pg_query_params($conn, $query, array($nom, $code, $heures))) {
                            header('Location: index.php?page=cours');
                            exit();
                        }
                    }
                    require_once '../app/views/cours/create.php';
                    break;

                case 'edit':
                    if(isset($_GET['id'])) {
                        if($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $id = $_GET['id'];
                            $nom = $_POST['nom'];
                            $code = $_POST['code'];
                            $heures = $_POST['heures']; // Changé de 'heure' à 'heures'

                            $query = "UPDATE cours SET nom=$1, code=$2, heures=$3 WHERE id=$4"; // Changé 'heure' à 'heures'
                            if(pg_query_params($conn, $query, array($nom, $code, $heures, $id))) {
                                header('Location: index.php?page=cours');
                                exit();
                            }
                        }
                        $id = $_GET['id'];
                        $result = pg_query_params($conn, "SELECT * FROM cours WHERE id = $1", array($id));
                        $cours_unique = pg_fetch_assoc($result);
                    }
                    require_once '../app/views/cours/edit.php';
                    break;

                case 'show':
                    if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $result = pg_query_params($conn, "SELECT * FROM cours WHERE id = $1", array($id));
                        $cours_unique = pg_fetch_assoc($result);
                    }
                    require_once '../app/views/cours/show.php';
                    break;

                case 'delete':
                    if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                        if(pg_query_params($conn, "DELETE FROM cours WHERE id = $1", array($id))) {
                            header('Location: index.php?page=cours');
                            exit();
                        }
                    }
                    break;

                default:
                    $cours = pg_query($conn, "SELECT * FROM cours ORDER BY id");
                    require_once '../app/views/cours/index.php';
                    break;
            }
            break;
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>