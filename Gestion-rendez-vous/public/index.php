<?php

require_once __DIR__ . '/../app/controllers/RendezVousController.php';
require_once __DIR__ . '/../app/controllers/ClientController.php';

$controller = $_GET['controller'] ?? null;
$action = $_GET['action'] ?? null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Rendez-vous</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-custom {
            border: 2px solid blue;
            color: blue;
            background-color: white;
        }
        .btn-custom:hover {
            background-color: blue;
            color: white;
        }
        .container {
            margin-top: 50px;
        }
        .header {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container text-center">
    <h1 class="header">Bienvenue dans le système de gestion des rendez-vous</h1>
    <p>Veuillez sélectionner l'une des options ci-dessous :</p>
    <div class="d-flex justify-content-center">
        <a href="index.php?controller=client&action=index" class="btn btn-primary mx-2">Gérer les clients</a>
        <a href="index.php?controller=rendezvous&action=index" class="btn btn-primary mx-2">Gérer les rendez-vous</a>
    </div>
</div>

<?php
if ($controller) {
    switch ($controller) {
        case 'rendezvous':
            $rendezVousController = new RendezVousController();
            if ($action == 'index') {
                $rendezVousController->index();
            } elseif ($action == 'create') {
                $rendezVousController->create();
            } elseif ($action == 'store') {
                $rendezVousController->store($_POST);
            } elseif ($action == 'edit') {
                $rendezVousController->edit($_GET['id']);
            } elseif ($action == 'update') {
                $rendezVousController->update($_GET['id'], $_POST);
            } elseif ($action == 'delete') {
                $rendezVousController->delete($_GET['id']);
            } elseif ($action == 'show') {
                $rendezVousController->show($_GET['id']);
            }
            break;

        case 'client':
            $clientController = new ClientController();
            if ($action == 'index') {
                $clientController->index();
            } elseif ($action == 'create') {
                $clientController->create();
            } elseif ($action == 'store') {
                $clientController->store($_POST);
            } elseif ($action == 'edit') {
                $clientController->edit($_GET['id']);
            } elseif ($action == 'update') {
                $clientController->update($_GET['id'], $_POST);
            } elseif ($action == 'delete') {
                $clientController->delete($_GET['id']);
            } elseif ($action == 'show') {
                $clientController->show($_GET['id']);
            }
            break;

        default:
            echo "<div class='container text-center'><p>Controller not found.</p></div>";
            break;
    }
} else {
    echo "<div class='container text-center'><p>No controller specified.</p></div>";
}
?>
</body>
</html>