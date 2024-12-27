<?php
require_once __DIR__ . '/../models/Client.php';

class ClientController {
    private $clientModel;

    public function __construct() {
        $this->clientModel = new Client();
    }

    public function index() {
        $clients = $this->clientModel->getAll();
        require_once __DIR__ . '/../views/clients/index.php';
    }

    public function create() {
        require_once __DIR__ . '/../views/clients/create.php';
    }

    public function store($data) {
        $this->clientModel->create($data);
        header('Location: index.php?controller=client&action=index');
    }

    public function edit($id) {
        $client = $this->clientModel->getById($id);
        require_once __DIR__ . '/../views/clients/edit.php';
    }

    public function update($id, $data) {
        $this->clientModel->update($id, $data);
        header('Location: index.php?controller=client&action=index');
    }

    public function delete($id) {
        $this->clientModel->delete($id);
        header('Location: index.php?controller=client&action=index');
    }
}
?>