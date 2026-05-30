<?php
    require_once __DIR__ .'/../config/conexao.php';

    Class Perfil{
        public function inserirImagem($biografia, $caminhoCompleto, $idU){
            $pdo = Conexao::getConn();
            $sql = "INSERT INTO perfil(biografia, endpasta, idUsuario) values(:biografia, :endpasta, :idUsuario)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':biografia', $biografia);
            $stmt->bindParam(':endpasta', $caminhoCompleto);
            $stmt->bindParam(':idUsuario', $idU);

            return $stmt->execute();
        }

         public static function listarPerfil(){
            $pdo = Conexao::getConn();
            $sql = "select perfil.biografia, perfil.endpasta, usuario.nomeUsuario from perfil inner join usuario on perfil.
            idUsuario = usuario.idUsuario";
            $stmt = $pdo->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


    }




?>