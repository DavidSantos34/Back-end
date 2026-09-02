<?php

echo"Caixa Eletronico - Itaú <br>";
echo"1 - Consulta saldo, 2 - fazer saque, 3 - Fazer depósito, 4 - Ver extrato, 5 - Sair <br>";

$opcao = 3;

switch($opcao){
    case 1:
        echo"Seu saldo é R$ 650,81";
        break;
    case 2:
        echo"Qual o valor?";
        break;
    case 3:
        echo"Qual o valor do depósito?";
        break;
    case 4:
        echo"Seu extrato é: ";
        break;
    case 5:
        echo"Você saiu";
        break;
    default:
        echo"opcao invalida";
        break;
}


?>