<?php

require_once __DIR__ . '/../model/personagens.php';

class PersonagemController {
    public function index() {
        $model = new Personagem();
        $personagens = $model->listarTodos();

        include __DIR__ . '/../view/personagens.php';
    }
}