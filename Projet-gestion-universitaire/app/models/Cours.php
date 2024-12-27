<?php
require_once __DIR__ . '/../database.php';

class Cours {
    public static function all() {
        global $conn;
        $result = pg_query($conn, "SELECT * FROM cours");
        return pg_fetch_all($result);
    }

    public static function find($id) {
        global $conn;
        $result = pg_query_params($conn, "SELECT * FROM cours WHERE id = $1", array($id));
        return pg_fetch_assoc($result);
    }

    public static function create($data) {
        global $conn;
        $query = "INSERT INTO cours (nom, code, heures) VALUES ($1, $2, $3)";
        pg_query_params($conn, $query, array($data['nom'], $data['code'], $data['heures']));
    }

    public static function update($id, $data) {
        global $conn;
        $query = "UPDATE cours SET nom = $1, code = $2, heures = $3 WHERE id = $4";
        pg_query_params($conn, $query, array($data['nom'], $data['code'], $data['heures'], $id));
    }

    public static function delete($id) {
        global $conn;
        pg_query_params($conn, "DELETE FROM cours WHERE id = $1", array($id));
    }
}
?>