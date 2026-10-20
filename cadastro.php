<?php
require_once __DIR__ . '/init.php';

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit;
}

// Mensagens de erro enviadas por processa_cadastro.php
$erros = [
    'vazio'     => 'Preencha todos os campos.',
    'email'     => 'Informe um email válido.',
    'senhas'    => 'As senhas não coincidem.',
    'duplicado' => 'Este email já está cadastrado.',
];
$erro = $erros[$_GET['erro'] ?? ''] ?? null;

$base   = '';
$titulo = 'Criar conta';

include __DIR__ . '/includes/header.php';
?>
<section class="caixa">
    <h2>Criar conta</h2>
    <p class="intro">Leva menos de um minuto.</p>

    <?php if ($erro): ?>
        <p class="mensagem mensagem-erro"><?= htmlspecialchars($erro) ?></p>
    <?php endif; ?>

    <form method="post" action="processa_cadastro.php" class="formulario">
        <label for="nome">Nome completo</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required>

        <label for="confirmar">Confirmar senha</label>
        <input type="password" id="confirmar" name="confirmar" required>

        <button type="submit" class="btn">Criar conta</button>
    </form>

    <p class="links-extra">
        <a href="login.php">Já tenho conta</a>
        <a href="index.php">Voltar ao catálogo</a>
    </p>
</section>

</main>
</body>
</html>
