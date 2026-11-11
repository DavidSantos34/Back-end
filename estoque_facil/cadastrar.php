<?php

include "config/conexao.php";

$nome= $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$nomeImagem = NULL;

if(isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == UPLOAD_ERR_OK){
    
    $extensaoPermitidas = ["jpg", "jpeg", "png", "webp"];
    $extensao = strtolower(pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION));
     if(!in_array($extensao, $extensaoPermitidas)){
        die("Formato não permitido. Use jpg, jpeg, png, webp");
     }

     if($_FILES["imagem"] ["size"] > 2 * 1024 * 1024){
        die ("Imagem muito grande!!!");
     }

     $nomeImagem = uniqid("produto_") . "." . $extensao;
     move_uploaded_file($_FILES["imagem"]["tmp_name"], "uploads/" . $nomeImagem);
}

 
$sql = "INSERT INTO tb_produtos(nome_produto, quantidade, preco, categoria, imagem) VALUES('$nome','$quantidade','$preco','$categoria', '$nomeImagem')";

if($conexao->query($sql)){
    echo "Produto cadastrado com sucesso!";
}
else{
    echo "Erro ao cadastrar produto, chamar o TI";
}



?>