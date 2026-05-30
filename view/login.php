<?php include 'include/cabecalho.php';?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants In Trash Wiki - Login</title>
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
                        <h1>Login</h1>
                        <div class="pesquisa">
                            <input type="text" placeholder="Pesquisar...">
                            <span class="lupa">&#128269;</span>
                        </div>
                    </div>

                    <section class="form-cadastro">
                        <!-- LOGIN FORMULARIO -->
                        <form action="../controller/routes.php?action=logar" method="post">
                            
                            <h2 class="titulo-cadastro">Entre na sua conta</h2>

                        <div class="campo-grupo">
                            <label for="email">Usuário</label>
                            <input id="email" type="text" name="usuario" placeholder="Digite seu usuário" required>
                        </div>

                        <div class="campo-grupo">
                            <label for="senha">Senha</label>
                            <input id="senha" name="senhaLogin" type="password" placeholder="Digite sua senha" required minlength="8">
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