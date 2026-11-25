<?php

include "config/conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha = password_hash($senha, PASSWORD_DEFAULT);

$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'";

$resultado = $conexao->query($sql);

if ($resultado->rowCount() > 0) {
    echo "Usuario já existe, use outro!";
    exit;
} else {
    $sql = "INSERT INTO tb_usuarios(nome, email, senha) VALUES('$nome','$email','$senha')";

    if ($conexao->query($sql)) {
        echo "✅ Usuário cadastrado com sucesso! 
        <br> 
        <a href='login.html'>Ir para o login</a>";
    } else {
        echo "❌ Erro! Tente novamente.";
    }
}
?>