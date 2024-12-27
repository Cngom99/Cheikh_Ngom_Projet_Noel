<?php

require_once __DIR__ . '/../database.php';

class RendezVous {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $query = "SELECT rdv.id, rdv.date, rdv.heure, rdv.description, CONCAT(c.nom, ' ', c.prenom) AS client 
                  FROM rendezvous rdv
                  JOIN clients c ON rdv.client_id = c.id";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT rdv.id, rdv.date, rdv.heure, rdv.description, rdv.client_id, CONCAT(c.nom, ' ', c.prenom) AS client 
                  FROM rendezvous rdv
                  JOIN clients c ON rdv.client_id = c.id
                  WHERE rdv.id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->conn->prepare("INSERT INTO rendezvous (date, heure, description, client_id) VALUES (:date, :heure, :description, :client_id)");
        $stmt->execute([
            'date' => $data['date'],
            'heure' => $data['heure'],
            'description' => $data['description'],
            'client_id' => $data['client_id']
        ]);
    }

    public function update($id, $data) {
        $stmt = $this->conn->prepare("UPDATE rendezvous SET date = :date, heure = :heure, description = :description, client_id = :client_id WHERE id = :id");
        $stmt->execute([
            'date' => $data['date'],
            'heure' => $data['heure'],
            'description' => $data['description'],
            'client_id' => $data['client_id'],
            'id' => $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM rendezvous WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
?>