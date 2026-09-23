<?php

$nome = $_POST["nome"];
$horas = $_POST["horas"];

$horasAno = $horas * 365;
$anos = $horasAno / 24 / 365;

echo"Olá $nome <br><br>";
echo"Você passa aproximadamente $horasAno horas por ano <br>";
echo"Isso representa aproximadamente $anos meses da sua vida";


?>