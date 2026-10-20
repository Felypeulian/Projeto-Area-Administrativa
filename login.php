<?php
require_once __DIR__ . '/init.php';

// Quem já está logado vai direto para o catálogo
if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

$base   = '';
$titulo = 'Entrar';

include __DIR__ . '/includes/header.php';
?>
<section class="caixa">
    <h2>Entrar</h2>
    <p class="intro">Acesse sua conta para administrar o catálogo.</p>

    <?php if (isset($_GET['erro'])): ?>
        <p class="mensagem mensagem-erro">Email ou senha inválidos.</p>
    <?php elseif (isset($_GET['cadastro'])): ?>
        <p class="mensagem mensagem-sucesso">Conta criada com sucesso! Entre com seus dados.</p>
    <?php endif; ?>

    <form method="post" action="processa_login.php" class="formulario">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit" class="btn">Entrar</button>
    </form>

    <p class="links-extra">
        <a href="cadastro.php">Criar conta</a>
        <a href="index.php">Voltar ao catálogo</a>
    </p>
</section>

</main>
</body>
</html>
