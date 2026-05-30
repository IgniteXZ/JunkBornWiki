<?php include 'include/cabecalho.php';?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants In Trash Wiki - Personagens</title>
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
                        <li><a href="routes.php?action=menu">Página Inicial</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Atualizações</a></li>
                    </ul>
                </aside>

                <main class="cixacentro">
                    <div class="dentrocaixa">

                        <div class="topo-personagens">
                            <h1>Personagens</h1>

                            <div class="pesquisa">
                               <input type="text" id="campoBusca" placeholder="O que você procura?" onkeyup="buscar()">
                                <span class="lupa">&#128269;</span>
                            </div>
                        </div>

                       <div class="menu-personagens">
    <ul class="categorias">
        <li onclick="filtrarCategoria('Todos')">Todos</li>
        <li onclick="filtrarCategoria('Protagonista')">Protagonista</li>
        <li onclick="filtrarCategoria('Antagonista')">Antagonista</li>
    </ul>
</div>
                        <section class="personagens-lista">

                            <?php if (isset($personagens) && !empty($personagens)): ?>

                                <?php foreach ($personagens as $p): ?>

                                    <div class="personagem-card" data-categoria="<?php echo $p['tipo']; ?>">
                                        <h2><?php echo $p['nome']; ?></h2>

                                        <p>
                                            Tipo:
                                            <strong><?php echo $p['tipo']; ?></strong>
                                        </p>

                                        <span>
                                            <?php echo $p['descricao']; ?>
                                        </span>
                                    </div>

                                <?php endforeach; ?>

                            <?php else: ?>

                                <p>Nenhum personagem encontrado.</p>

                            <?php endif; ?>

                        </section>

                    </div>
                </main>

            </div>

        </main>

        <footer>
            2026 Plants In Trash Wiki - Todos os direitos reservados
        </footer>

    </div>
    <script src="../js/interacaoteste.js"></script>
</body>
</html>