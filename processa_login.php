<?php
require_once __DIR__ . '/init.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$email = strtolower(trim($_POST['email'] ?? ''));
$senha = $_POST['senha'] ?? '';

foreach ($_SESSION['usuarios'] as $usuario) {
    $emailUsuario = strtolower(trim($usuario['email'] ?? ''));
    $senhaHash = $usuario['senha'] ?? '';

    if ($emailUsuario === $email && password_verify($senha, $senhaHash)) {
        session_regenerate_id(true);

        // O perfil é definido no servidor, nunca pelo formulário.
        $tipo = ($emailUsuario === 'admin@catalogo.com') ? 'admin' : 'usuario';

        $_SESSION['usuario'] = [
            'nome'  => $usuario['nome'],
            'email' => $emailUsuario,
            'tipo'  => $tipo,
        ];

        header('Location: index.php');
        exit;
    }
}

header('Location: login.php?erro=1');
exit;
