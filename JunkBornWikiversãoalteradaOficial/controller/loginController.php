<?php

    

require_once __DIR__.'/../model/LoginModel.php';

    class LoginController {

        public function logar()
        
        {
            

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {

                $nome = $_POST['usuario'];
                $senha = trim($_POST['senhaLogin']);
                
                

                    

                    if($nome === "" || $senha === "")
                    {
                    
                        die("Erro: campos vazios não podem ser enviados.");
                    
                    }

                    

                    $model = new Login();
                    $usuario = $model->logar($nome);
                    
                    
                    if ($usuario && password_verify($senha, $usuario['senha'])) 
                    {
                        echo "<script>
                            alert('Usuário logado com sucesso!');
                            window.location.href = '../controller/routes.php?action=formL';
                            </script>";
                       
                    } 
                    
                    else {
                        
                        echo "<script>
                            alert('Erro ao Logar usuário.');
                            window.location.href = '../controller/routes.php?action=formL';
                            </script>";
                        
                           

                        
                    }
            }
                
        }            

    }
    

?>