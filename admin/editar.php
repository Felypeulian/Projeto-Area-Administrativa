<?php
require_once __DIR__ . '/../includes/auth.php';

// Valida o índice recebido pela URL
$indice = $_GET['indice'] ?? '';
if (!ctype_digit((string) $indice) || !isset($_SESSION['produtos'][(int) $indice])) {
    header('Location: ../index.php');
    exit;
}
$indice  = (int) $indice;
$produto = $_SESSION['produtos'][$indice];

$base   = '../';
$titulo = 'Editar produto';

include __DIR__ . '/../includes/header.php';
?>
<section class="caixa">
    <h2>Editar produto</h2>
    <p class="intro">Altere os dados e salve.</p>

    <?php if (isset($_GET['erro'])): ?>
        <p class="mensagem mensagem-erro">Preencha todos os campos e informe um preço válido.</p>
    <?php endif; ?>

    <form method="post" action="salvar.php" class="formulario">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="indice" value="<?= $indice ?>">

        <label for="nome">Nome do produto</label>
        <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($produto['nome']) ?>" required>

        <label for="preco">Preço (R$)</label>
        <input type="number" id="preco" name="preco" step="0.01" min="0" value="<?= htmlspecialchars((string) $produto['preco']) ?>" required>

        <label for="descricao">Descrição</label>
        <textarea id="descricao" name="descricao" rows="4" required><?= htmlspecialchars($produto['descricao']) ?></textarea>

        <button type="submit" class="btn">Salvar alterações</button>
    </form>

    <p class="links-extra"><a href="../index.php">Voltar ao catálogo</a></p>
</section>

</main>
</body>
</html>
