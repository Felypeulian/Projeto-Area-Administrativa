<?php
// Inicia a sessão e prepara os dados iniciais sem sobrescrever dados existentes.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['infoSite'])) {
    $_SESSION['infoSite'] = [
        'empresa' => 'Loja Aurora',
        'slogan'  => 'Produtos selecionados para o seu dia a dia',
        'email'   => 'contato@lojaaurora.com',
    ];
}

if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [
        [
            'nome'  => 'Administrador',
            'email' => 'admin@catalogo.com',
            'senha' => password_hash('123456', PASSWORD_DEFAULT),
            'tipo'  => 'admin',
        ],
    ];
}

// Corrige usuários já existentes na sessão: somente o email administrativo reservado
// recebe perfil admin. Todas as demais contas são usuários comuns.
foreach ($_SESSION['usuarios'] as $indice => $usuario) {
    $emailUsuario = strtolower(trim($usuario['email'] ?? ''));
    $_SESSION['usuarios'][$indice]['tipo'] = ($emailUsuario === 'admin@catalogo.com')
        ? 'admin'
        : 'usuario';
}

if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [
        ['nome' => 'Fone de Ouvido Bluetooth', 'preco' => 149.90, 'descricao' => 'Som de alta qualidade, bateria de 20 horas e microfone embutido.'],
        ['nome' => 'Mochila Executiva',        'preco' => 189.00, 'descricao' => 'Compartimento para notebook de até 15 polegadas e tecido resistente à água.'],
        ['nome' => 'Garrafa Térmica 500 ml',   'preco' => 59.90,  'descricao' => 'Mantém bebidas quentes por 12 horas e geladas por 24 horas.'],
        ['nome' => 'Luminária de Mesa LED',    'preco' => 79.50,  'descricao' => 'Três níveis de brilho e braço articulado para ajustar a luz.'],
    ];
}

// Atualiza o perfil da conta que já estiver conectada nesta sessão.
if (isset($_SESSION['usuario']['email'])) {
    $_SESSION['usuario']['tipo'] =
        (strtolower($_SESSION['usuario']['email']) === 'admin@catalogo.com')
        ? 'admin'
        : 'usuario';
}
