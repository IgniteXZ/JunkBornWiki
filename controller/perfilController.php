<?php
    require_once __DIR__.'/../model/PerfilModel.php';
    require_once __DIR__.'/../model/cadastroModel.php';


    class PerfilController{

    public function escolherUsuario(){
        $conta = new Cadastro();
        $listaUsuario = $conta->listarCadastro();

        include __DIR__ ."/../view/perfil.php";

    }

    public function inserirImagem(){
            
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $biografia = $_POST['biografia'];
            $idU = $_POST['idU'];
            if(isset($_FILES['foto'])){

                $extensao = strtolower(pathinfo($_FILES['foto']['name'],PATHINFO_EXTENSION));
                $extensoesPermitidas = ['jpg', 'jpeg', 'png'];
                $model = new Perfil();


                if(in_array($extensao, $extensoesPermitidas)){
                    $nomeFoto = uniqid(). "." . $extensao;
                    $diretorioDestino =  __DIR__ ."/../view/img/" . $nomeFoto;

                    $caminhoCompleto = "view/img/" . $nomeFoto;

                    if(move_uploaded_file($_FILES['foto']['tmp_name'], $diretorioDestino)){
                    if($model->inserirImagem($biografia, $caminhoCompleto, $idU)){ 
                        echo "<script>alert('Perfil Feito');
                        location.href='../controller/routes.php?action=formL'</script>";
                    }else{
                        echo  "<script>alert('Erro ao salvar no banco de dados.'); window.history.back();</script>";
                    }
                    }
                }else{
                    echo "<script>alert('Erro ao morrer'); window.history.back(); </script>";
                    exit;
                }

                
            }







    }
        }

        PUBLIC function listarP(){
                $model = new Perfil();
                $lista = $model->listarPerfil();
                include __DIR__ . "/../view/perfilrelatorio.php";
            }
    }



?>