<?php

$nome_motorista = $_POST["nome"];
$tipo_veiculo = $_POST["veiculo"];
$quantidade_horas = $_POST["horas"];
if($tipo_veiculo == 1){
    $valor_final = $quantidade_horas * 5.00;
    echo"Motorista: $nome_motorista<br>";
    echo"Você Ficou $quantidade_horas horas no estacionamento<br>";
    echo"Total: R$ $valor_final";
}elseif($tipo_veiculo == 2){
    $valor_final = $quantidade_horas * 8.00;
    echo"Motorista: $nome_motorista<br>";
    echo"Você Ficou $quantidade_horas horas no estacionamento<br>";
    echo"Total: R$ $valor_final";
}elseif($tipo_veiculo == 3){
    $valor_final = $quantidade_horas * 12.00;
    echo"Motorista: $nome_motorista<br>";
    echo"Você Ficou $quantidade_horas horas no estacionamento<br>";
    echo"Total: R$ $valor_final";
}


?>