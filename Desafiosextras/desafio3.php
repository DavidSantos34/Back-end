<?php

$nome = $_POST["nome"];
$peso_pessoa = $_POST["peso"];
$altura_pessoa = $_POST["altura"];
$imc = $peso_pessoa/($altura_pessoa * $altura_pessoa);

if($imc>18.5){
     echo"Paciente: $nome";
    echo"<br>Peso: $peso_pessoa";
    echo"<br>Altura: $altura_pessoa";
    echo"<br>IMC: $imc";
    echo"<br>Abaixo do peso";
    echo"<br>O que o seu resultado indica: Seu IMC está abaixo da faixa considerada ideal. Isso pode significar que seu corpo precisa de mais nutrientes e energia para funcionar perfeitamente.<br>
💡 Próximo passo: O ganho de peso saudável deve ser feito com foco em alimentos nutritivos e no ganho de massa magra. Recomendamos a consulta com um nutricionista para estruturar um plano alimentar adequado para você.";
}elseif($imc>=24.9 && $imc<=18.5){
     echo"Paciente: $nome";
    echo"<br>Peso: $peso_pessoa";
    echo"<br>Altura: $altura_pessoa";
    echo"<br>IMC: $imc";
    echo"<br>Peso Normal";
    echo"<br> O que o seu resultado indica: Parabéns! Seu IMC está na faixa considerada saudável. Isso mostra que seu peso atual está em equilíbrio com a sua altura, o que reduz o risco de diversas doenças. <br>
💡 Próximo passo: O segredo agora é manter! Continue praticando atividades físicas regularmente e priorizando uma alimentação equilibrada e variada para garantir sua longevidade.";
}elseif($imc>=25 && $imc<=29.9){
     echo"Paciente: $nome";
    echo"<br>Peso: $peso_pessoa";
    echo"<br>Altura: $altura_pessoa";
    echo"<br>IMC: $imc";
    echo"<br>Sobrepeso";
    echo"<br>O que o seu resultado indica: Seu resultado aponta que você está na faixa de sobrepeso. Este é um sinal de alerta do seu corpo, indicando que pequenos ajustes na rotina podem evitar problemas de saúde no futuro.<br>
💡 Próximo passo: Não se desespere, este é o momento perfeito para agir. Mudar pequenos hábitos diários, como melhorar a qualidade das refeições e reduzir o sedentarismo, já trará grandes benefícios. Se precisar de ajuda, um profissional de saúde pode guiar sua jornada.";
}elseif($imc<=30){
    echo"Paciente: $nome";
    echo"<br>Peso: $peso_pessoa";
    echo"<br>Altura: $altura_pessoa";
    echo"<br>IMC: $imc";
    echo"<br>Obesidade";
    echo"<br> O que o seu resultado indica: Seu IMC indica obesidade em estágio inicial. É importante olhar para esse número com carinho e atenção, pois o excesso de peso prolongado pode sobrecarregar o seu organismo.<br>
    💡 Próximo passo: Lembre-se de que a balança não define quem você é. O foco agora deve ser a sua saúde. Buscar o apoio de um médico ou nutricionista ajudará você a traçar metas realistas e seguras para recuperar seu bem-estar.";
}


?>