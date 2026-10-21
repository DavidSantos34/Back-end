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
            <th>Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>
        <?php while($produto = $resultado->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php echo $produto["id"]; ?></td>
            <td><?php echo $produto["nome"]; ?></td>
            <td><?php echo $produto["categoria"]; ?></td>
            <td><?php echo $produto["preco"]; ?></td>
            <td><?php echo $produto["quantidade"]; ?></td>
        </tr>

        <?php }?>
    </table>
</body>
</html>