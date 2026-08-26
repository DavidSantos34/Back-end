<?php

$nome = "David";
$nivel_acesso = 2;

if($nivel_acesso == 1){
    echo"Acesso básico";
}
else if($nivel_acesso == 2){
    echo"Acesso Intermediário";
}
else if($nivel_acesso == 3){
    echo"Acesso Administrador";
}
else{
    echo"Acesso Inválido!";
}


?>