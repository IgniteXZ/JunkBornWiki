<?php

class Conexao {
    public static function getConn($dbname = "cadastro") {
        $host = "localhost";
        $user = "root";
        $pass = "";

        try {
            $conexao = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $user,
                $pass
            );

            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexao;

        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}