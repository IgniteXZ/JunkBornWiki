<?php include 'include/cabecalho.php';?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants In Trash Wiki - Perfil</title>
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
                        <h1>Perfil</h1>
                        <div class="pesquisa">
                            <input type="text" placeholder="Pesquisar...">
                            <span class="lupa">&#128269;</span>
                        </div>
                    </div>

                    <section class="form-cadastro">
                        <form action="../controller/routes.php?action=criarPerfil" method="post" enctype="multipart/form-data">
                            
                            <h2 class="titulo-cadastro">Edite seu Perfil</h2>

                        
                        <label class="label-padrao">Nome de Usuário</label>
                        <select name="idU" class="input-padrao" required>
                            <option value="">Selecione</option>
                            <?php foreach($listaUsuario as $u): ?>
                                <option value="<?=$u['idUsuario']?>"><?= $u['nomeUsuario'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>


                        <div class="campo-grupo">
                            <label for="">Foto de perfil:</label>
                            <input type="file" name="foto" accept="image/png. image/jpg. image/jpeg" required>
                        </div>

                        <div class="campo-grupo">
                            <label for="">Biografia:</label>
                            <input type="text" name="biografia" required>

                        </div>

                        <button class="btn-login-style" name="entrar" type="submit">Entrar</button>

                        
                        </form>
                        
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