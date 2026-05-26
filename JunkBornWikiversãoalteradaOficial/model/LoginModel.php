<?php

    require_once __DIR__ .'/../config/conexao.php';

    class Login
    {


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
    }
?>