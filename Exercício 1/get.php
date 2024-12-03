<?php

header('Content-Type: application/json; charset=UTF-8');

$usuarios = [
    10 => [
        'nome' => 'João Silva',
        'email' => 'joao@email.com'
    ]
];

// Pegando o ID do usuário pela URL
$usuario_id = $_GET['usuario_id'] ?? null;

if ($usuario_id && isset($usuarios[$usuario_id])) {
    // Retornando o nome e e-mail do usuário como JSON
    $json  = json_encode($usuarios[$usuario_id], JSON_UNESCAPED_UNICODE);
    echo $json;
} else {
   throw new Exception('Usuário inexistente', 404);
}
?>
