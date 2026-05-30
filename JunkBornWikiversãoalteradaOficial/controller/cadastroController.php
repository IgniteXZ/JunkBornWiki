<?php

    

require_once __DIR__.'/../model/cadastroModel.php';
require_once __DIR__.'/../model/perfilModel.php';


    class CadastroController {

        public function abrirLogin(){
            include __DIR__ . "/../view/login.php";
        }

        public function autenticar() {
            if ($_SERVER['REQUEST_METHOD'] =='POST') {
                $loginDigitado = $_POST['usuario'];
                $senhaDigitado = trim($_POST['senhaLogin']);

                $model = new Cadastro();
                $usuario = $model->logar($loginDigitado);

                if($usuario && password_verify($senhaDigitado, $usuario['senha'])) {
                    if(session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }   

                    $_SESSION['usuario_funcional']=$usuario['funcional'];
                    $_SESSION['usuario_nome']=$usuario['nomefunc'];
                    header("Location: ../index.php?action=formL");
                    exit;
                }
                else{
                    echo "<script>
                            alert('Credenciais invalidas. Verifique seu usuario e senha');
                            window.history.back();
                            </script>";
                }


            }
        }

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
                            window.location.href = '../controller/routes.php?action=form';
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