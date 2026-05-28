<?php

    require_once __DIR__ .'/../config/conexao.php';

    class Cadastro
    {


       public function cadastrar($nome, $email, $senha) 
       {

            $sql = "INSERT into usuario(nomeUsuario, email, senha) VALUES (:na, :e, :s)";


            $stmt = Conexao::getConn()->prepare($sql);

            if ($stmt === false)
            {
                die("Erro ao preparar a consulta.");
            }

            $stmt->bindParam(':na',$nome);
            $stmt->bindParam(':e',$email);
            $stmt->bindParam(':s',$senha);
            return $stmt -> execute();

        }

        public function logar($nome) 
       {

            $sql = "SELECT * FROM usuario WHERE nomeUsuario = :na";


            $stmt = Conexao::getConn()->prepare($sql);
            

            if ($stmt === false)
            {
                die("Erro ao preparar a consulta.");
            }

            $stmt->bindParam(':na',$nome);
            $stmt -> execute();
            return $stmt->fetch();

        }
    

        public static function listarCadastro(){
            $pdo = Conexao::getConn();
            $sql = "select * from usuario";
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>