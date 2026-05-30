<?php include 'include/cabecalho.php';?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants In Trash Wiki - Cadastro</title>
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
                </aside>

                <main class="cixacentro">
                    <div class="dentrocaixa">
                        <h1>Cadastro</h1>
                        <div class="pesquisa">
                            <input type="text" placeholder="Pesquisar...">
                            <span class="lupa">&#128269;</span>
                        </div>
                    </div>

                    <section class="form-cadastro">
                        <h2 class="titulo-cadastro">Prencha com seus Dados</h2>

                      <div class="campo-grupo">


                <form action="../controller/routes.php?action=salvar" method="post">
                        <label for="usuario">Usuário</label>
                        <input id="usuario" type="text" name="nomeUsuario" placeholder="Digite seu usuário" required>
                    </div>

                    <div class="campo-grupo">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                    </div>

                    <div class="campo-grupo">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required minlength="8">
                    </div>

                        <button class="btn-login-style" name="enviar" type="submit">Entrar</button>
                </form>
                    </section>
                </main>
            </div>
        </main>

        <footer>
            2026 Plants In Trash Wiki - Todos os direitos reservados
        </footer>
    </div>
</body>
</html>