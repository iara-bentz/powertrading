<?php
// URL da API
$url = 'https://api.smtplw.com.br/v1/messages';

// Token de autenticação (substitua pelo seu token)
$token = '570576e14fedc4f90bc74b9c019a2137';

// Recebe os dados do formulário HTML
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];  
$subject = $_POST['subject'];
$body = $_POST['message'];

// Validação simples dos campos
if(empty($first_name) || empty($last_name) || empty($phone) || empty($email) || empty($subject) || empty($body)) {
    echo 'Por favor, preencha todos os campos obrigatórios.';
    exit;
}

// Mensagem do corpo do e-mail
$body = "
    Nome: $first_name $last_name<br>
    Celular: $phone<br>
    Email: $email<br>
    Mensagem: $body
";

// Dados da requisição para a API
$data = array(
    "subject" => $subject,
    "body" => $body,
    "from" => "contato@powertrading.com.br", 
    "to" => "contato@powertrading.com.br", 
    "headers" => array("Content-Type" => "text/html")
);

// Inicializa a requisição CURL
$ch = curl_init();

// Configurações da requisição
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'x-auth-token: ' . $token
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Executa a requisição e recebe a resposta
$response = curl_exec($ch);

// Verifica se a requisição foi bem-sucedida
if (curl_errno($ch)) {
    echo 'Erro: ' . curl_error($ch);
} else {
    // Verifica o cabeçalho Location para obter a URL do status da requisição
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($http_code == 201) { // Sucesso (código 201 para created)
        $location = curl_getinfo($ch, CURLINFO_REDIRECT_URL); // URL retornada no cabeçalho Location
        echo 'Mensagem enviada com sucesso. Verifique o status em: ' . $location;
    } else {
        echo 'Falha no envio. Código HTTP: ' . $http_code;
    }
}

// Fecha a conexão CURL
curl_close($ch);
