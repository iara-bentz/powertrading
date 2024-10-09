<?php

require 'lw/Mailer/PHPMailerAutoload.php'; 

$mail = new PHPMailer;
$mail->setLanguage('en');
$mail->CharSet = 'UTF-8';
$mail->isSMTP();
$mail->Host = 'smtplw.com.br';
$mail->SMTPAuth = true;
$mail->Username = 'powertrading';
$mail->Password = 'gZEMQTXP3211';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->From = 'contato@powertrading.com.br';
$mail->FromName = 'SMTP Locaweb';

header('Content-Type: application/json');


// Captura os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail->addAddress('contato@powertrading.com.br', 'Nome Usuário'); // Endereço principal
    $mail->addReplyTo($email, $first_name . ' ' . $last_name); // Resposta

    $mail->isHTML(true);
    $mail->Subject = 'Contato de ' . $first_name . ' ' . $last_name;
    $mail->Body    = 'Nome: ' . $first_name . ' ' . $last_name . '<br>' .
                     'Telefone: ' . $phone . '<br>' .
                     'Email: ' . $email . '<br>' .
                     'Mensagem: ' . nl2br($message);

if (!$mail->send()) {
    // Caso não consiga enviar, redirecione de volta com um erro (pode ser uma página de erro)
    header("Location: erro.php?error=" . urlencode($mail->ErrorInfo));
    exit();
} else {
    // Se a mensagem foi enviada com sucesso, redirecione para a página de sucesso
    header("Location: sucesso.php");
    exit();
}
}


?>
