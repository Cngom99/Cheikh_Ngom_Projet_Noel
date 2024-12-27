<?php
require_once __DIR__ . '/../models/Etudiant.php';

class EtudiantController {
    public function index() {
        $etudiants = Etudiant::all();
        require_once __DIR__ . '/../views/etudiants/index.php';
    }

    public function create() {
        require_once __DIR__ . '/../views/etudiants/create.php';
    }

    public function store($data) {
        Etudiant::create($data);
        header('Location: index.php?controller=etudiant&action=index');
    }

    public function edit($id) {
        $etudiant = Etudiant::find($id);
        require_once __DIR__ . '/../views/etudiants/edit.php';
    }

    public function update($id, $data) {
        Etudiant::update($id, $data);
        header('Location: index.php?controller=etudiant&action=index');
    }

    public function delete($id) {
        Etudiant::delete($id);
        header('Location: index.php?controller=etudiant&action=index');
    }
}
?>