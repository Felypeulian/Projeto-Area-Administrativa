<?php
require_once __DIR__ . '/../includes/auth.php';

// A exclusão só acontece via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $indice = $_POST['indice'] ?? '';

    if (ctype_digit((string) $indice) && isset($_SESSION['produtos'][(int) $indice])) {
        unset($_SESSION['produtos'][(int) $indice]);
        $_SESSION['produtos'] = array_values($_SESSION['produtos']); // reorganiza os índices
    }
}

header('Location: ../index.php');
exit;
