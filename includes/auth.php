<?php
// Todas as páginas e ações administrativas exigem perfil de administrador.
require_once __DIR__ . '/../init.php';

if (
    !isset($_SESSION['usuario']) ||
    ($_SESSION['usuario']['tipo'] ?? '') !== 'admin'
) {
    header('Location: ../login.php');
    exit;
}
