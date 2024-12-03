<?php

$usuarios = [
    10 => [
        'nome' => 'João Silva',
        'email' => 'joao@email.com'
    ]
];

// Verificando se é uma requisição PUT
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Lendo os dados JSON enviados na requisição
    $json = file_get_contents('php://input');
    $dados = json_decode($json, true);

    // Atualizando o e-mail do usuário com ID 10
    if (isset($dados['email'])) {
        $usuarios[10]['email'] = $dados['email'];
        // Retorna uma resposta de sucesso
        echo json_encode(['mensagem' => 'E-mail atualizado com sucesso']);
    } else {
        echo json_encode(['erro' => 'E-mail não fornecido']);
    }
} else {
    echo json_encode(['erro' => 'Método inválido. Use PUT.']);
}
?>
