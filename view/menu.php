<?php include 'include/cabecalho.php';?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants In Trash Wiki - Página Inicial</title>
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

                <main class="cixacentro">
                    <div class="dentrocaixa">
                        <h1>Página Inicial</h1>
                        <div class="pesquisa">
                            <input type="text" placeholder="Pesquisar...">
                            <span class="lupa">&#128269;</span>
                        </div>
                    </div>

                    <article class="caixaindorma">
                        <h2>Sobre o Jogo</h2>
                        <p>
                            Plants in trash é um jogo incentivando a sustentabilidade. A história se passa em um mundo apocalíptico,
                            onde a humanidade destruiu o planeta com a poluição e guerras nucleares, mas após séculos, as plantas
                            começaram a voltar, mas com características humanas, e os lixos acabaram tendo a mesma mutação. Então o
                            objetivo é você derrotar os lixos, limpando o planeta, e com os restos dos lixos derrotados você pode os
                            reciclar, criando itens que auxiliem o jogador a seguir nas fases.
                        </p>
                    </article>

                    <nav class="botoes">
                        <a href="#">O Jogo</a>
                        <a href="routes.php?action=personagens">Personagens</a>
                        <a href="routes.php?action=itens">Itens</a>
                    </nav>

                    <!-- <div class="butaunslink">
                        <div class="link-group">
                            <a href="#">Controles</a>
                        </div>
                        <div class="link-group">
                            <a href="#">Samanboy</a>
                        </div>
                        <div class="link-group">
                            <a href="#">Nitro</a>
                        </div>
                    </div> -->
                </main>
            </div>
        </main>

        <footer>
            2026 Plants In Trash Wiki - Todos os direitos reservados
        </footer>
    </div>
</body>
</html>