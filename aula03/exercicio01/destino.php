<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Dados Recebidos</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<?php
$nome = $_REQUEST['nome'] ?? '';
$telefone = $_REQUEST['telefone'] ?? '';
$email = $_REQUEST['email'] ?? '';
$mensagem = $_REQUEST['mensagem'] ?? '';

$metodo = $_SERVER['REQUEST_METHOD'];

$headers = apache_request_headers();

echo "<h1>Dados Recebidos</h1>";

echo "<div class='resultado'>";

echo "<h3>Método HTTP Utilizado</h3>";
echo "<p>$metodo</p>";

echo "<h3>Dados do Formulário</h3>";

echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";

echo "<p><strong>Telefone:</strong> " . htmlspecialchars($telefone) . "</p>";

echo "<p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>";

echo "<p><strong>Mensagem:</strong><br>" . nl2br(htmlspecialchars($mensagem)) . "</p>";

echo "<h3>Cabeçalhos da Requisição HTTP</h3>";

echo "<pre>";

foreach ($headers as $chave => $valor) {
    echo $chave . ": " . $valor . "\n";
}

echo "</pre>";

echo "</div>";

?>

</div>

</body>
</html>