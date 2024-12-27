<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion Universitaire</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-modifier {
            background-color: yellow;
            color: black;
        }
        .btn-supprimer {
            background-color: red;
            color: white;
        }
        .btn-ajouter {
            border: 2px solid blue;
            color: blue;
        }
    </style>
</head>
<body>
<div class="container text-center mt-5">
    <h1 class="mb-4">Bienvenue dans le système de gestion universitaire</h1>
    <p>Veuillez sélectionner l'une des options ci-dessous :</p>
    <ul class="list-inline">
        <li class="list-inline-item">
            <a href="index.php?controller=etudiant&action=index" class="btn btn-primary">Gérer les étudiants</a>
        </li>
        <li class="list-inline-item">
            <a href="index.php?controller=cours&action=index" class="btn btn-primary">Gérer les cours</a>
        </li>
    </ul>
</div>

<?php
require_once __DIR__ . '/../app/controllers/EtudiantController.php';
require_once __DIR__ . '/../app/controllers/CoursController.php';

$controller = $_GET['controller'] ?? null;
$action = $_GET['action'] ?? null;

if ($controller) {
    switch ($controller) {
        case 'etudiant':
            $etudiantController = new EtudiantController();
            if ($action == 'index') {
                $etudiantController->index();
            } elseif ($action == 'create') {
                $etudiantController->create();
            } elseif ($action == 'store') {
                $etudiantController->store($_POST);
            } elseif ($action == 'edit') {
                $etudiantController->edit($_GET['id']);
            } elseif ($action == 'update') {
                $etudiantController->update($_GET['id'], $_POST);
            } elseif ($action == 'delete') {
                $etudiantController->delete($_GET['id']);
            }
            break;

        case 'cours':
            $coursController = new CoursController();
            if ($action == 'index') {
                $coursController->index();
            } elseif ($action == 'create') {
                $coursController->create();
            } elseif ($action == 'store') {
                $coursController->store($_POST);
            } elseif ($action == 'edit') {
                $coursController->edit($_GET['id']);
            } elseif ($action == 'update') {
                $coursController->update($_GET['id'], $_POST);
            } elseif ($action == 'delete') {
                $coursController->delete($_GET['id']);
            }
            break;

        default:
            echo "Controller not found.";
            break;
    }
}
?>
</body>
</html>