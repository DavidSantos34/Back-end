<?php

$tamanho = $_POST['tamanho'];
$refri = $_POST['refri'];
$sabores = $_POST['sabores'];
$borda = $_POST['borda'];
$desconto = $_POST['Cupom'];

$qtd = count($sabores);

if ($tamanho == 'Broto') {
    $total = 45;
} else{
    $total = 65;
}

if($refri == 'Coca') {
    $total == $total + 12;
} elseif ($refri == 'Guarana'){
    $total = $total + 10;
}elseif($refri == 'heineken'){
    $total = $total + 7;
}elseif($refri == 'Chopp'){
    $total = $total + 13;
}

if($borda == 'Nenhuma'){
    $total = $total + 0;
}elseif($borda == 'Catupiry'){
    $total = $total + 5;
}elseif($borda == 'Cheddar'){
    $total = $total + 5;
}

if($desconto == 'PROMO10'){
    $total = $total - 10;
}

$texto_sabores = implode(',' , $sabores);

//Cria o link do whatshApp
$msg = "Pedido: Pizza $tamanho ($texto_sabores) + Refri $refri + Borda $borda. Total: R$ $total";
$numero = "551499854554";
$link = "https://api.whatshapp.com/send?phone=". $numero . "&text=" . urlencode($msg);



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pizzaria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class ="box">
        <img src="" alt="Logo da Pizzaria">
        <h1>Seu pedido</h1>
        <p>Pizza: <?php echo $tamanho; ?> </p>
        <p>Sabores: <?php echo $texto_sabores; ?> </p>
        <p>Bebida: <?php echo $refri; ?></p>
        <p>Borda: <?php echo $borda; ?></p> 
        <p><strong>Total: <?php echo $total; ?></strong></p>
        <a href="<?php echo $link; ?> "class="btn wsp">Pedir no whatshApp</a>
        <br><br>
        <a href="index.html" class="btn">Voltar</a>
    </div>
</body>
</html>
