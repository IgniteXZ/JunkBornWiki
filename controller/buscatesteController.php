<?php
    require_once 'model/Produto.php';
    class ProdutoController {
        public function index() {
            $model = new classes();
            $precisadecoisa = $model->listarTodos();
            include 'include/menu.php';
        }
    }