<?php
// Antes de incluir: defina $base ('' na raiz, '../' em admin/) e $titulo
$base   = $base ?? '';
$titulo = $titulo ?? 'Catálogo';
$info   = $_SESSION['infoSite'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo) ?> | <?= htmlspecialchars($info['empresa']) ?></title>
    <link rel="stylesheet" href="<?= $base ?>css/style.css">
</head>
<body>
<header class="cabecalho">
    <div class="container cabecalho-conteudo">
        <a href="<?= $base ?>index.php" class="marca"><?= htmlspecialchars($info['empresa']) ?></a>
        <nav class="menu-principal" aria-label="Principal">
            <a href="<?= $base ?>index.php">Catálogo</a>
        </nav>
        <nav class="menu-conta" aria-label="Conta">
            <?php if (isset($_SESSION['usuario'])): ?>
                <span class="usuario"><?= htmlspecialchars($_SESSION['usuario']['nome']) ?></span>
                <?php if (($_SESSION['usuario']['tipo'] ?? '') === 'admin'): ?>
                    <a href="<?= $base ?>admin/adicionar.php">Administração</a>
                <?php endif; ?>
                <a href="<?= $base ?>logout.php">Sair</a>
            <?php else: ?>
                <a href="<?= $base ?>login.php">Entrar</a>
                <a href="<?= $base ?>cadastro.php" class="link-destaque">Criar conta</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
<main>
