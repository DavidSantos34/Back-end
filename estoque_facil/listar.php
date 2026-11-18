<?php

include "config/conexao.php";

$sql = "SELECT * FROM tb_produtos";
$resultado = $conexao->query($sql);


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Lista de Produtos</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Imagem</th>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>
        <?php while ($produto = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $produto["id_produto"]; ?></td>
                <td>
                    <?php if ($produto["imagem"]): ?>
                        <img class="img-produto" src="uploads/<?= $produto["imagem"] ?>">
                    <?php else: ?>
                        <span>Sem Imagem</span>
                    <?php endif; ?>
                </td>
                <td><?php echo $produto["nome"]; ?></td>
                <td><?php echo $produto["qtd"]; ?></td>
                <td><?php echo $produto["preco"]; ?></td>
                <td><?php echo $produto["categoria"]; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $produto["id_produto"]; ?>">Editar</a>
                    |
                    <a href="excluir.php?id=<?php echo $produto["id_produto"]; ?>">Excluir</a>
                </td>
            </tr>

        <?php } ?>
    </table>
    <br>
    <a href="cadastrar.html" class="botao">Cadastrar Novo Produto</a>
</body>

</html>