<?php

require_once __DIR__ . '/../models/RendezVous.php';
require_once __DIR__ . '/../models/Client.php';

class RendezVousController {
    private $rendezVousModel;
    private $clientModel;

    public function __construct() {
        $this->rendezVousModel = new RendezVous();
        $this->clientModel = new Client();
    }

    public function index() {
        $rendezVous = $this->rendezVousModel->getAll();
        require_once __DIR__ . '/../views/rendezvous/index.php';
    }

    public function create() {
        $clients = $this->clientModel->getAll();
        require_once __DIR__ . '/../views/rendezvous/create.php';
    }

    public function store($data) {
        $this->rendezVousModel->create($data);
        header('Location: index.php?controller=rendezvous&action=index');
    }

    public function edit($id) {
        $rendezVous = $this->rendezVousModel->getById($id);
        $clients = $this->clientModel->getAll();
        require_once __DIR__ . '/../views/rendezvous/edit.php';
    }

    public function update($id, $data) {
        $this->rendezVousModel->update($id, $data);
        header('Location: index.php?controller=rendezvous&action=index');
    }

    public function delete($id) {
        $this->rendezVousModel->delete($id);
        header('Location: index.php?controller=rendezvous&action=index');
    }

    public function show($id) {
        $rendezVous = $this->rendezVousModel->getById($id);
        require_once __DIR__ . '/../views/rendezvous/show.php';
    }
}
?>