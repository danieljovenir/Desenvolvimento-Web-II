<?php
// Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Dados Recebidos</h1>";
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($_POST['nome']) . "</p>";
    echo "<p><strong>Telefone:</strong> " . htmlspecialchars($_POST['telefone']) . "</p>";
    echo "<p><strong>E-mail:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
    echo "<p><strong>Mensagem:</strong> " . htmlspecialchars($_POST['mensagem']) . "</p>";

    echo "<h2>Cabeçalhos da Requisição</h2>";
    foreach (getallheaders() as $nome => $valor) {
        echo "$nome: $valor<br>";
    }

    echo "<h2>Método da Requisição</h2>";
    echo $_SERVER["REQUEST_METHOD"];
} else {
    // Se a requisição não for POST, redireciona de volta ao formulário
    header("Location: index.php");
}

