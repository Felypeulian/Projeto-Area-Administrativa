<?php
require_once __DIR__ . '/init.php';

// Remove só a autenticação; o catálogo continua na sessão
unset($_SESSION['usuario']);

header('Location: index.php');
exit;
