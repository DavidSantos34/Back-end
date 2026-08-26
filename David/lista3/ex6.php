<?php

$valorPedido = 46.90;
$valorMinimoEntrega = 60.00;
$idadeMinimaBebida = 18;
$idadeCliente = 20;
$quantidadePedida = 2;
$estoqueDisponivel = 48;
$statusPedido = "Pago";

if($valorPedido >= $valorMinimoEntrega){
    echo "Entrega é grátis!";
}
else{
    echo "Seu pedido não atingiu o valor mínimo. Para seu pedido ser concluído, pague a taxa de 15,00.";
}
echo "<br>";
if($idadeCliente >= $idadeMinimaBebida){
    echo "Bebidas alcoólicas de preços variados bem aqui!";
}
else{
    echo "Você não atingiu a idade miníma para consumir bebidas alcoólicas! Veja aqui outras opções de bebidas SEM álcool";
}
echo "<br>";
if($quantidadePedida <= $estoqueDisponivel){
    echo "A quantidade pedida está disponível! Concluído";
}
else{
    echo "A quantidade pedida não está disponível.. Pedido negado.";
}
echo "<br>";
if($statusPedido == "Pago"){
    echo "Pedido liberado para a produção!";
}
else{
    echo "Pedido negado: Pagamento não concluído. Quer escolher outra forma de pagamento ou cancelar o pedido?";
}
echo "<br>";
echo "<br>";
?>