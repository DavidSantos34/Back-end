<?php

$combustivel = $_POST["combustivel"];
$quantidade_litros = $_POST["quantidade"];
if($combustivel == 1){
    $valor_litros = $quantidade_litros * 6.20;
    echo"Você abasteceu $quantidade_litros Litros<br>";
    echo"Total: R$ $valor_litros";
}elseif($combustivel == 2){
    $valor_litros = $quantidade_litros * 4.20;
    echo"Você abasteceu $quantidade_litros Litros<br>";
    echo"Total: R$ $valor_litros";
}elseif($combustivel == 3){
    $valor_litros = $quantidade_litros * 6.00;
    echo"Você abasteceu $quantidade_litros Litros<br>";
    echo"Total: R$ $valor_litros";
}


?>