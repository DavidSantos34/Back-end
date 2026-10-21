<?php

include "config/conexao.php";

$nome= $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO tb_produtos(nome, quantidade, preco, categoria) VALUES('$nome','$quantidade','$preco','$categoria')";

if($conexao->query($sql)){
    echo "Produto cadastrado com sucesso!";
}
else{
    echo "Erro ao cadastrar produto, chamar o TI";
}



?>