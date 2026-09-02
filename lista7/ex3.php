<?php

function calcularDesconto($preco, $desconto){
    $valorDesconto = $preco * $desconto /100;
    return $preco - $valorDesconto;
}

echo "preço final: R$ ", calcularDesconto(100,10);

?>