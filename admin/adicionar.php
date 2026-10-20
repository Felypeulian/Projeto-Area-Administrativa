<?php
require_once __DIR__ . '/../includes/auth.php';

$base   = '../';
$titulo = 'Adicionar produto';

include __DIR__ . '/../includes/header.php';
?>
<section class="caixa">
    <h2>Adicionar produto</h2>
    <p class="intro">Preencha os dados do novo produto.</p>

    <?php if (isset($_GET['erro'])): ?>
        <p class="mensagem mensagem-erro">Preencha todos os campos e informe um preço válido.</p>
    <?php endif; ?>

    <form method="post" action="salvar.php" class="formulario">
        <input type="hidden" name="acao" value="adicionar">

        <label for="nome">Nome do produto</label>
        <input type="text" id="nome" name="nome" required>

        <label for="preco">Preço (R$)</label>
        <input type="number" id="preco" name="preco" step="0.01" min="0" required>

        <label for="descricao">Descrição</label>
        <textarea id="descricao" name="descricao" rows="4" required></textarea>

        <button type="submit" class="btn">Salvar</button>
    </form>

    <p class="links-extra"><a href="../index.php">Voltar ao catálogo</a></p>
</section>

</main>
</body>
</html>
