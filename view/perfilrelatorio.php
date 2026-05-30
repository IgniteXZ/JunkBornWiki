<?php 
include 'include/cabecalho.php';
require_once __DIR__ . '/../config/conexao.php'; 

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants In Trash Wiki - Relatório de Perfis</title>
    <link rel="stylesheet" href="../css/teste.css">
</head>
<body>
    <div class="page-wrapper">
        
        <main class="page-content">
            <div class="logo-container">
               <img src="../view/img/PT.png" title="logo" alt="Logo Plants In Trash Wiki">
            </div>

            <div class="main-container">
                <aside class="caixalateral">
                    <h2>Navegação</h2>
                    <ul>
                        <li><a href="../controller/routes.php?action=menu">Página Inicial</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Atualizações</a></li>
                    </ul>
                </aside>

                <section class="cixacentro">
                    <div class="dentrocaixa">
                        <h1>Perfis</h1>
                        <div class="pesquisa">
                            <input type="text" placeholder="Pesquisar...">
                            <span class="lupa">&#128269;</span>
                        </div>
                    </div>

                    <section class="form-cadastro">
                        <h2 class="titulo-cadastro">Meu Perfil</h2>

                        <table class="tabela-relatorio">
                            <thead class="cabecalho-tabela">
                                <tr>
                                    <th>Nome de Usuário</th>
                                    <th>Biografia</th>
                                  <th>Foto de Perfil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lista as $u): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($u['nomeUsuario']) ?></td>
                                        <td><?= htmlspecialchars($u['biografia']) ?></td>
                                        <td><img src="/JunkBornWiki/<?php echo $u['endpasta'] ?>"></td> 
                                    </tr>
                                <?php endforeach; ?> 
                                                       
                            
                            </tbody>
                            

                        </table>
                        <button class="btn-login-style" name="entrar" type="submit">               
                             <a href="../controller/routes.php?action=formP">Editar Perfil</a>
                        </button>

                    </section>
                </section>
            </div>
        </main>

        <footer>
            2026 Plants In Trash Wiki - Todos os direitos reservados
        </footer>
    </div>
</body>
</html>