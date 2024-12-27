<?php
require_once __DIR__ . '/../models/Cours.php';

class CoursController {
    public function index() {
        $cours = Cours::all();
        require_once __DIR__ . '/../views/cours/index.php';
    }

    public function create() {
        require_once __DIR__ . '/../views/cours/create.php';
    }

    public function store($data) {
        Cours::create($data);
        header('Location: index.php?controller=cours&action=index');
    }

    public function edit($id) {
        $cours = Cours::find($id);
        require_once __DIR__ . '/../views/cours/edit.php';
    }

    public function update($id, $data) {
        Cours::update($id, $data);
        header('Location: index.php?controller=cours&action=index');
    }

    public function delete($id) {
        Cours::delete($id);
        header('Location: index.php?controller=cours&action=index');
    }
}
?>