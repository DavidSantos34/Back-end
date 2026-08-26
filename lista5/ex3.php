<?php

$nota1 = 10;
$nota2 = 7;

$media = ($nota1 + $nota2) /2;

if($media >=7){
    echo"Aprovado" ;
}
elseif($media >=5 && $media<7){
    echo"Em recuperação";
}
else{
    echo"Reprovado";
}

?>