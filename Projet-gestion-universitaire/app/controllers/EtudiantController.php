<?php
require_once '../app/models/Etudiant.php';

if(isset($_GET['action'])) {
    $action = $_GET['action'];
    switch($action) {
        case 'create':
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $filiere = $_POST['filiere'];

                if(createEtudiant($nom, $prenom, $email, $filiere)) {
                    header('Location: index.php');
                }
            }
            require '../app/views/etudiants/create.php';
            break;

        case 'edit':
            $id = $_GET['id'];
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $filiere = $_POST['filiere'];

                if(updateEtudiant($id, $nom, $prenom, $email, $filiere)) {
                    header('Location: index.php');
                }
            }
            $etudiant = pg_fetch_assoc(getEtudiantById($id));
            require '../app/views/etudiants/edit.php';
            break;

        case 'delete':
            $id = $_GET['id'];
            if(deleteEtudiant($id)) {
                header('Location: index.php');
            }
            break;

        case 'show':
            $id = $_GET['id'];
            $etudiant = pg_fetch_assoc(getEtudiantById($id));
            require '../app/views/etudiants/show.php';
            break;

        default:
            $etudiants = getAllEtudiants();
            require '../app/views/etudiants/index.php';
            break;
    }
}
?>