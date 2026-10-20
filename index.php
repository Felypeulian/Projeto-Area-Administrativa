<?php
require_once __DIR__ . '/init.php';

$base   = '';
$titulo = 'Catálogo';
$isAdmin = isset($_SESSION['usuario'])
    && ($_SESSION['usuario']['tipo'] ?? '') === 'admin';

include __DIR__ . '/includes/header.php';
?>
<section class="container hero">
    <h2>Objetos simples, escolhidos com cuidado.</h2>
    <p><?= htmlspecialchars($_SESSION['infoSite']['slogan']) ?>. Explore com calma e encontre o que combina com você.</p>
    <a href="#produtos" class="btn">Explorar produtos</a>
</section>

<section class="produtos" id="produtos">
    <div class="container">
        <div class="produtos-topo">
            <h2>Produtos</h2>
            <?php if ($isAdmin): ?>
                <a href="admin/adicionar.php" class="btn btn-pequeno">+ Adicionar produto</a>
            <?php endif; ?>
        </div>

        <div class="grade">
            <?php foreach ($_SESSION['produtos'] as $indice => $produto): ?>
                <article class="card">
                    <div class="card-imagem" aria-hidden="true"><?= htmlspecialchars(mb_substr($produto['nome'], 0, 1)) ?></div>
                    <div class="card-corpo">
                        <h3><?= htmlspecialchars($produto['nome']) ?></h3>
                        <p class="descricao"><?= htmlspecialchars($produto['descricao']) ?></p>
                        <p class="preco">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></p>

                        <?php if ($isAdmin): ?>
                            <div class="acoes">
                                <a href="admin/editar.php?indice=<?= $indice ?>" class="btn btn-pequeno btn-suave">Editar</a>
                                <form method="post" action="admin/excluir.php">
                                    <input type="hidden" name="indice" value="<?= $indice ?>">
                                    <button type="submit" class="btn btn-pequeno btn-suave">Excluir</button>
                                </form>
                            </div>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <?php if (empty($_SESSION['produtos'])): ?>
            <p class="vazio">Nenhum produto cadastrado.</p>
        <?php endif; ?>
    </div>
</section>

</main>
</body>
</html>
