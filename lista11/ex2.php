<?php

$valor =$_POST["valor"];

$dim = $_POST["dim"];

$troco = $dim - $valor;

if($dim < $valor){
    echo"Falta money";
}
else{
    echo "Troco é de: ",$troco;
}

?>