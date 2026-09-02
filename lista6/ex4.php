<?php

echo"Menu Pizzaria <br>";
echo"1 - Pizza, 2 - Hambúrguer, 3 - Refrigerante, 4 - Sobremesa, 5 - Sair <br>";

$opcao = 2;

switch($opcao){
    case 1:
        echo"Pizza está R$ 89,99";
        break;
    case 2:
        echo"Hambúrguer está R$ 25,00";
        break;
    case 3:
        echo"Refrigerante está R$ 8,99";
        break;
    case 4:
        echo"Sobremesa está R$10,99";
        break;
    case 5:
        echo"Você saiu";
    default:
        echo"Opação Invalida!";
        break;
}

?>