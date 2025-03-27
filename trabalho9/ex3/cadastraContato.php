<?php

require "contatos.php";

// coleta os dados do formulário
$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// cria um novo contato e acrescenta no arquivo de texto
$novoContato = new Contato($email, $senhaHash);
$novoContato->SalvaEmArquivo();

// redireciona o navegador para a página de listagem de contatos
header("location: listaContatos.php");

?>