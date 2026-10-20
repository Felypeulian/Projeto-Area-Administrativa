<?php
require_once __DIR__ . '/../includes/auth.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

$acao      = $_POST['acao'] ?? '';
$nome      = trim($_POST['nome'] ?? '');
$descricao = trim($_POST['descricao'] ?? '');
$preco     = str_replace(',', '.', trim($_POST['preco'] ?? ''));
$indice    = $_POST['indice'] ?? '';

// Página de formulário para voltar em caso de erro
$voltar = ($acao === 'editar') ? 'editar.php?indice=' . urlencode($indice) . '&erro=1' : 'adicionar.php?erro=1';

// Validação dos campos
if ($nome === '' || $descricao === '' || !is_numeric($preco) || $preco < 0) {
    header('Location: ' . $voltar);
    exit;
}

$produto = ['nome' => $nome, 'preco' => (float) $preco, 'descricao' => $descricao];

if ($acao === 'adicionar') {
    $_SESSION['produtos'][] = $produto;
} elseif ($acao === 'editar' && ctype_digit((string) $indice) && isset($_SESSION['produtos'][(int) $indice])) {
    $_SESSION['produtos'][(int) $indice] = $produto;
}

header('Location: ../index.php');
exit;
