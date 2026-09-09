<?php

$music = ["Tipo Tobi","Tipo Minato","Tipo madara","Tipo sasori","Tipo sasuke","Tipo narutin"];


$qtd = count($music);
echo "Tem: $qtd Músicas na playlist: <br>";


foreach($music as $n){
    echo "$n <br>";
}
?>