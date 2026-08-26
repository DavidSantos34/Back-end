<?php

$nomeCompleto = "Amy Bearborn";
$senha = 3322; 
$confirmaSenha = 3322;
$idade = 17;
$cont = 0;

if($nomeCompleto != " "){
    echo "Nome correto!";
    $cont += 1;
}
else{
    echo "Nome incorreto. Coloque o nome correto.";
}
echo "<br>";
if($senha == $confirmaSenha){
    echo "Senha correta!";
    $cont += 1;
}
else{
    echo "Senha incorreta";
}
echo "<br>";
if($idade >= 18){
    echo "Idade adequada!";
    $cont += 1;
}
else{
    echo "Idade inadequada, espere mais um tempo para acessar!";
}
echo "<br>";
echo "<br>";
if($cont == 3){
    echo "Acesso liberado!", "<br>", "Nome: ", $nomeCompleto , "<br>", "Senha: ", $senha, "<br>", $idade;
}
else{
    echo "Acesso negado! Os dados estão incorretos!";
}
echo "<br>";
?>