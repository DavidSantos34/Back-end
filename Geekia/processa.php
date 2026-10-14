<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tipo = $_POST["tipo"];
    $genero = $_POST["genero"];
    $tamanho = $_POST["tamanho"];  
    $obra = "";
    $descricao = "";

    //Anime

    if($tipo == "Anime" && $genero == "Ação" && $tamanho == "Curtas"){
        $obra = "One Punch Man";
        $descricao = "Ação humor e muitas batalhas";
    }
    elseif($tipo == "Anime" && $genero == "Ação" && $tamanho == "Longas"){
        $obra = "Attack on Titan";
        $descricao = "Ação, Misterio e muita emoção";
    }
    elseif($tipo == "Anime" && $genero == "Romance" && $tamanho == "Curtas"){
        $obra = "Tsuki ga Kirei";
        $descricao = "Romance adolescente e momentos fofos";
    }
    elseif($tipo == "Anime" && $genero == "Romance" && $tamanho == "Longas"){
        $obra = "Your lie in April";
        $descricao = "Romance, música e emoção";
    }
    elseif($tipo == "Anime" && $genero == "Fantasia" && $tamanho == "Curtas"){
        $obra = "Fullmetal Alchemist";
        $descricao = "Aventura,magia muita ação";
    }
    elseif($tipo == "Anime" && $genero == "Fantasia" && $tamanho == "Longas"){
        $obra = "Frieren";
        $descricao = "Fantasia,aventura e uma bela historia";
    }

    //manga

    elseif($tipo == "Mangá" && $genero == "Ação" && $tamanho == "Curtas"){
        $obra = "Demon Slayer";
        $descricao = "Caçador de demonios";
    }
    elseif($tipo == "Mánga" && $genero == "Ação" && $tamanho == "Longas"){
        $obra = "One Piece";
        $descricao = "Aventura, piratas e muitas batalhas";
    }
    elseif($tipo == "Mangá" && $genero == "Romance" && $tamanho == "Curtas"){
        $obra = "Kaguya-sama";
        $descricao = "Romance, comédia e muita emoção";
    }
    elseif($tipo == "Mangá" && $genero == "Romance" && $tamanho == "Longas"){
        $obra = "Nana";
        $descricao = "Romance, amizade e drama";
    }
    elseif($tipo == "Mangá" && $genero == "Fantasia" && $tamanho == "Curtas"){
        $obra = "Death Note";
        $descricao = "Mistério, estratégia e poderes";
    }
    elseif($tipo == "Mánga" && $genero == "Fantasia" && $tamanho == "Longas"){
        $obra = "Berserk";
        $descricao = "Fantasia sombria, ação e batalha";
    }

    //Livro

    elseif($tipo == "Livro" && $genero == "Ação" && $tamanho == "Curtas"){
        $obra = "Androides sonham com ovelhas";
        $descricao = "Ação, robôs com humanos";
    }
    elseif($tipo == "Livro" && $genero == "Ação" && $tamanho == "Longas"){
        $obra = "As Crônicas de Nárnia";
        $descricao = "Ação, aventura e batalhas";
    }
    elseif($tipo == "Livro" && $genero == "Romance" && $tamanho == "Curtas"){
        $obra = "Pequeno Príncipe";
        $descricao = "Uma história sobre amizade e amor";
    }
    elseif($tipo == "Livro" && $genero == "Romance" && $tamanho == "Longas"){
        $obra = "Orgulho e Preconceito";
        $descricao = "Romance clássico com personagens marcantes";
    }
    elseif($tipo == "Livro" && $genero == "Fantasia" && $tamanho == "Curtas"){
        $obra = "O Hobbit";
        $descricao = "Aventura, fantasia e dragões";
    }
    elseif($tipo == "Livro" && $genero == "Fantasia" && $tamanho == "Longas"){
        $obra = "Harry Potter";
        $descricao = "Magia,amizade e muita aventura ";
    }
    else{
        $obra= "Black Clover";
        $descricao = "ação, superação e um universo focado em magia";
    }

}
else{
    header("Location: index.html");
    exit;
}

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekIA - Especialista Nerd</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <img src="logo.jpg" width="200" alt="GeekIA Logo">
        <h2>Recomendação</h2>
        <strong>Obra:</strong>
        <?php echo $obra; ?>
        <br><br>
        <strong>Descrição</strong>
        <?php echo $descricao; ?>
    </div>
    <br><br>
    <a href="index.html">Voltar</a>

</body>

</html>