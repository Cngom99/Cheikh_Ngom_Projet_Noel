<?php
require_once '../app/models/Cours.php';

if(isset($_GET['action'])) {
    $action = $_GET['action'];
    switch($action) {
        case 'create':
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nom_cours = $_POST['nom_cours'];
                $code_cours = $_POST['code_cours'];
                $nombre_heures = $_POST['nombre_heures'];

                if(createCours($nom_cours, $code_cours, $nombre_heures)) {
                    header('Location: cours.php');
                }
            }
            require '../app/views/cours/create.php';
            break;

        case 'edit':
            $id = $_GET['id'];
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nom_cours = $_POST['nom_cours'];
                $code_cours = $_POST['code_cours'];
                $nombre_heures = $_POST['nombre_heures'];

                if(updateCours($id, $nom_cours, $code_cours, $nombre_heures)) {
                    header('Location: cours.php');
                }
            }
            $cours = pg_fetch_assoc(getCoursById($id));
            require '../app/views/cours/edit.php';
            break;

        case 'delete':
            $id = $_GET['id'];
            if(deleteCours($id)) {
                header('Location: cours.php');
            }
            break;

        case 'show':
            $id = $_GET['id'];
            $cours = pg_fetch_assoc(getCoursById($id));
            require '../app/views/cours/show.php';
            break;

        default:
            $cours = getAllCours();
            require '../app/views/cours/index.php';
            break;
    }
}
?>