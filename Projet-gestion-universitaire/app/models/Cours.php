<?php
require_once '../app/database.php';

function getAllCours() {
    global $conn;
    return pg_query($conn, "SELECT * FROM cours ORDER BY id");
}

function getCoursById($id) {
    global $conn;
    return pg_query_params($conn, "SELECT * FROM cours WHERE id = $1", array($id));
}

function createCours($nom_cours, $code_cours, $nombre_heures) {
    global $conn;
    return pg_query_params($conn,
        "INSERT INTO cours (nom_cours, code_cours, nombre_heures) VALUES ($1, $2, $3)",
        array($nom_cours, $code_cours, $nombre_heures));
}

function updateCours($id, $nom_cours, $code_cours, $nombre_heures) {
    global $conn;
    return pg_query_params($conn,
        "UPDATE cours SET nom_cours = $1, code_cours = $2, nombre_heures = $3 WHERE id = $4",
        array($nom_cours, $code_cours, $nombre_heures, $id));
}

function deleteCours($id) {
    global $conn;
    return pg_query_params($conn, "DELETE FROM cours WHERE id = $1", array($id));
}
?>