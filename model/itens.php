<?php

require_once __DIR__ . '/../config/conexao.php';

class Itens {
    public function listarTodos() {
       $pdo = Conexao::getConn("itens");

        $sql = "
            select
                i.idInfo as id,
                i.nomeInfo as nome,
                s.nomeSubCategoria as tipo,
                i.textoDaInfo as descricao
            from info i
            inner join categoria c on i.idCategoria = c.idCategoria
            inner join subCategoria s on i.idSubCategoria = s.idSubCategoria
            where c.nomeCategoria = 'Itens'
        ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}