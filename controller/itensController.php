<?php

require_once __DIR__ . '/../model/itens.php';

class ItensController {
    public function itens() {
        $model = new Itens();
        $itens = $model->listarTodos();

        include __DIR__ . '/../view/itens.php';
    }
}