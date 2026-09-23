<?php

$nome_cliente = $_POST["nome"];
$idade_cliente = $_POST["idade"];
$servico = $_POST["servico"];

echo "Nome: ",$nome_cliente;
echo "<br>";
echo "Idade: ",$idade_cliente;
echo "<br>";
if($servico == 1){
    echo "Corte de cabelo = R$ 30";
}
elseif($servico == 2){
    echo "Barba = R$ 20";
}
else{
    echo "Corte e barba = R$ 45";
}
?>