<?php
require_once __DIR__ . '/init.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: cadastro.php');
    exit;
}

$nome      = trim($_POST['nome'] ?? '');
$email     = strtolower(trim($_POST['email'] ?? ''));
$senha     = $_POST['senha'] ?? '';
$confirmar = $_POST['confirmar'] ?? '';

// Validações
if ($nome === '' || $email === '' || $senha === '') {
    $erro = 'vazio';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erro = 'email';
} elseif ($senha !== $confirmar) {
    $erro = 'senhas';
} else {
    $erro = null;
    foreach ($_SESSION['usuarios'] as $usuario) {
        if (strtolower($usuario['email']) === $email) {
            $erro = 'duplicado';
        }
    }
}

if ($erro) {
    header('Location: cadastro.php?erro=' . $erro);
    exit;
}

$_SESSION['usuarios'][] = [
    'nome'  => $nome,
    'email' => $email,
    'senha' => password_hash($senha, PASSWORD_DEFAULT),
    'tipo'  => 'usuario',
];

header('Location: login.php?cadastro=1');
exit;
