<?php include 'include/cabecalho.php';?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plants In Trash Wiki - Itens</title>
    <link rel="stylesheet" href="../css/teste.css">
</head>
<body>
    <div class="page-wrapper">

        <main class="page-content">

            <div class="logo-container">
                <img src="../view/img/PT.png" title="logo" alt="Logo JunkBorn Wiki">
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

                        <div class="topo-itens">
                            <h1>itens</h1>

                            <div class="pesquisa">
                               <input type="text" id="campoBusca" placeholder="O que você procura?" onkeyup="buscar()">
                                <span class="lupa">&#128269;</span>
                            </div>
                        </div>

                       <div class="menu-itens">
    <ul class="categorias">
        <li onclick="filtrarCategoria('Todos')">Todos</li>
        <li onclick="filtrarCategoria('Itens chave')">Itens chave</li>
        <li onclick="filtrarCategoria('Não consumíveis')">Não consumíveis</li>
        <li onclick="filtrarCategoria('Consumíveis')">Consumíveis</li>
    </ul>
</div>
                        <section class="itens-lista">

                            <?php if (isset($itens) && !empty($itens)): ?>

                                <?php foreach ($itens as $p): ?>

                                    <div class="itens-card" data-categoria="<?php echo $p['tipo']; ?>">
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

                                <p>Nenhum item encontrado.</p>

                            <?php endif; ?>

                        </section>

                    </div>
                </main>

            </div>

        </main>

        <footer>
            2026 JunkBorn Wiki - Todos os direitos reservados
        </footer>

    </div>
    <script src="../js/interacaoteste.js"></script>
</body>
</html>