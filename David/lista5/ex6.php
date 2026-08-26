<?php

$usuario = "Davidsantos535";
$idade = 16;

if($idade < 13){
    echo"Cadastro não permitido!";
}
else if($idade>=13 && $idade < 16 ){
    echo"Só pode usar a plataforma com controle dos pais!";
}
else{
    echo"Plataforma liberada!!!!";
}


?>