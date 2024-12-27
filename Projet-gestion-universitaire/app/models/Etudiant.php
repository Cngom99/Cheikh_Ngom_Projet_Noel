<?php
require_once '../app/database.php';

function getAllEtudiants() {
    global $conn;
    return pg_query($conn, "SELECT * FROM etudiants ORDER BY id");
}

function getEtudiantById($id) {
    global $conn;
    return pg_query_params($conn, "SELECT * FROM etudiants WHERE id = $1", array($id));
}

function createEtudiant($nom, $prenom, $email, $filiere) {
    global $conn;
    return pg_query_params($conn,
        "INSERT INTO etudiants (nom, prenom, email, filiere) VALUES ($1, $2, $3, $4)",
        array($nom, $prenom, $email, $filiere));
}

function updateEtudiant($id, $nom, $prenom, $email, $filiere) {
    global $conn;
    return pg_query_params($conn,
        "UPDATE etudiants SET nom = $1, prenom = $2, email = $3, filiere = $4 WHERE id = $5",
        array($nom, $prenom, $email, $filiere, $id));
}

function deleteEtudiant($id) {
    global $conn;
    return pg_query_params($conn, "DELETE FROM etudiants WHERE id = $1", array($id));
}
?>