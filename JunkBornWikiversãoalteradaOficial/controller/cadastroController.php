<?php

    

require_once __DIR__.'/../model/cadastroModel.php';

    class CadastroController {

        public function cadastrar()
        
        {
            

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {

                $nome = $_POST['nomeUsuario'];
                $email = trim($_POST['email']);
                $senha = $_POST['senha'];
                $senha = preg_replace('/\s+/', '', $senha);
                $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

                  

                    if($nome === "" || $email === "" || $senha === "")
                    {
                    
                        die("Erro: campos vazios não podem ser enviados.");
                    
                    }

                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                    {
                        die("Email inválido.");
                    }

                    $model = new cadastro();

                    if ($model->cadastrar($nome, $email, $senhaHash)) 
                    {
                        echo "<script>
                            alert('Usuário cadastrado com sucesso!');
                            window.location.href = '../view/login.php';
                            </script>";
                       
                    } else {
                        echo "<script>
                            alert('Erro ao cadastrar usuário.');
                            window.location.href = '../controller/routes.php?action=form';
                            </script>";
                        
                    }
            }
                
        }       
        
        PUBLIC function listarC(){
                $model = new Cadastro();
                $model->listarCadastro();
            }

    }
    

?>