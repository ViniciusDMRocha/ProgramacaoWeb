<?php

require "contatos.php";

$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";

$arrayContatos = carregaContatosDeArquivo();
foreach ($arrayContatos as $contato) {
    $emailArquivo = htmlspecialchars($contato->email);
    $senhaHash = htmlspecialchars($contato->senha);
    
    if (password_verify($senha, $senhaHash) && ($emailArquivo == $email)) {
        header("location: sucesso.html");
        exit();
    } 
}

header("location: login.html");
exit();

?>