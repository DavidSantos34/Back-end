<?php

$quantidade_peixe =$_POST['quantidade'];

if($quantidade_peixe>50){
    $multa = ($quantidade_peixe - 50)*4;
    echo"Sua multa será: $multa Reais";
}else{
    echo"Não tera multa fique tranquilo";
}

?>