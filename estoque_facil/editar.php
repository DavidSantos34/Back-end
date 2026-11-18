<?php
include "config/conexao.php";

if ($_POST) {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $categoria = $_POST["categoria"];
    $preco = $_POST["preco"];
    $qtd = $_POST["quantidade"];

    $sql = "UPDATE tb_produtos 
            SET nome='$nome', categoria='$categoria', preco='$preco', qtd='$qtd' 
            WHERE id = $id";

    if ($conexao->query($sql)) {
        echo "Produto atualizado com sucesso!";
        echo "<br><br><a href='listar.php'>Voltar para a lista</a>";
        exit;
    } else {
        echo "Erro ao atualizar produto.";
    }
}

$id = $_GET["id"];
$sql = "SELECT * FROM tb_produtos WHERE id = $id";
$resultado = $conexao->query($sql);
$produto = $resultado->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="formulario">
            <h2>Editar Produto</h2>
            <form action="editar.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">

                <label>Nome do produto:</label>
                <input type="text" name="nome" value="<?php echo $produto['nome']; ?>" required>

                <label>Categoria:</label>
                <select name="categoria" required>
                    <option value="Periféricos" <?php if ($produto['categoria'] == 'Periféricos') echo 'selected'; ?>>Periféricos</option>
                    <option value="Componentes" <?php if ($produto['categoria'] == 'Componentes') echo 'selected'; ?>>Componentes</option>
                    <option value="Monitores" <?php if ($produto['categoria'] == 'Monitores') echo 'selected'; ?>>Monitores</option>
                    <option value="Acessórios" <?php if ($produto['categoria'] == 'Acessórios') echo 'selected'; ?>>Acessórios</option>
                </select>

                <label>Preço de venda (R$):</label>
                <input type="number" name="preco" step="0.01" value="<?php echo $produto['preco']; ?>" required>

                <label>Quantidade em estoque:</label>
                <input type="number" name="quantidade" value="<?php echo $produto['qtd']; ?>" required>

                <button type="submit">Salvar Alterações</button>
            </form>
        </div>
        <br>
        <a href="listar.php">Voltar</a>
    </div>
</body>

</html>