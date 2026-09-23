<?php

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$media = ($num1+$num2+$num3)/3;

if($media >= 6){
    echo"APROVADO!!! ",$media;
}
else{
    echo"REPROVADO!!! ", $media;
}
?>