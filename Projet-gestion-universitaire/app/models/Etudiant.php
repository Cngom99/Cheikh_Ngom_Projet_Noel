<?php
require_once __DIR__ . '/../database.php';

class Etudiant {
    public static function all() {
        global $conn;
        $result = pg_query($conn, "SELECT * FROM etudiants");
        return pg_fetch_all($result);
    }

    public static function find($id) {
        global $conn;
        $result = pg_query_params($conn, "SELECT * FROM etudiants WHERE id = $1", array($id));
        return pg_fetch_assoc($result);
    }

    public static function create($data) {
        global $conn;
        $query = "INSERT INTO etudiants (nom, prenom, email, filiere) VALUES ($1, $2, $3, $4)";
        pg_query_params($conn, $query, array($data['nom'], $data['prenom'], $data['email'], $data['filiere']));
    }

    public static function update($id, $data) {
        global $conn;
        $query = "UPDATE etudiants SET nom = $1, prenom = $2, email = $3, filiere = $4 WHERE id = $5";
        pg_query_params($conn, $query, array($data['nom'], $data['prenom'], $data['email'], $data['filiere'], $id));
    }

    public static function delete($id) {
        global $conn;
        pg_query_params($conn, "DELETE FROM etudiants WHERE id = $1", array($id));
    }
}
?>