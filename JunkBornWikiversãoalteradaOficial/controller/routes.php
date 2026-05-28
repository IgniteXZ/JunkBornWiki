<?php


    require_once __DIR__ . '/cadastroController.php';
    require_once __DIR__ . '/loginController.php';
    require_once __DIR__ . '/perfilController.php';
    require_once __DIR__ . '/personagemController.php';

    $action=$_GET['action']??'menu';
    $cadastro = new CadastroController();
    $Perfil = new PerfilController();
    $personagem = new PersonagemController();


    switch($action)
    {
        case 'menu':
            include __DIR__ . '/../view/menu.php';

        break;

        case 'form':

            include __DIR__ . '/../view/cad.php';

        break;


        
        case 'formP':
            $Perfil ->escolherUsuario();

        break;

        case 'cadastroRelatorio':
            $cadastro->listarC();

        break;

         case 'perfilRelatorio':

            $Perfil->listarP();

        break;

        case 'salvar':
        
            $cadastro->cadastrar();

        break;

        
        case 'formL':

            $cadastro ->abrirLogin();
  
          break;

        case 'logar':

            $cadastro->autenticar();

        break;


        case 'meuPerfil':
          //  $cadastro->meuPerfil();    
        break;


        case 'criarPerfil':
            $Perfil->inserirImagem();
        break;



        case 'personagens':
            $personagem->index();
        break;
        
        default:
            include __DIR__ . '/../view/cad.php';
        break;


    }



?>