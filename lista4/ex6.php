<?php

$idade = 60;
$nome = "Sr.João";
$possui_deficiencia = true;
$Gestante = false;

if($idade >=60 || $possui_deficiencia == true || $Gestante == false){
    echo"Atendimento prioritario";
}
else{
    echo"atendimento normal";
}



?>