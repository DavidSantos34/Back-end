<?php

$peso = 70;
$altura = 1.70;  
$resultado = $peso/($altura*$altura);



if($resultado >= 19 && $resultado <25){
    echo"Peso Ideal";
}
else if($resultado >=25 && $resultado <30){
    echo"Sobrepeso";
}
else if($resultado >= 30 && $resultado <35){
    echo"Obesidade Grau I";
}
else if($resultado >=35 && $resultado <40){
    echo"Obesidade Grau II";
}
else if($resultado>=40){
    echo"Obesidade Grau III";
}


?>