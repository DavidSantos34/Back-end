<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tipo = $_POST["tipo"];
    $genero = $_POST["genero"];
    $tamanho = $_POST["tamanho"];
    $onde = $_POST["onde"];
    $obra = "";
    $descricao = "";

    //Ação

    if($tipo == "Ação" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Celular"){
        $obra = "Brawl Stars";
        $descricao = "Combates rápidos 3v3 e modo battle royale com partidas dinâmicas e vários heróis.";
    }
    elseif($tipo == "Ação" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Computador"){
        $obra = "Overwatch 2 ";
        $descricao = "Confrontos ágeis em equipe com heróis únicos, habilidades especiais e ação intensa em primeira pessoa.";
    }
    elseif($tipo == "Ação" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Videogame"){
        $obra = "Rocket League";
        $descricao = "Partidas rápidas e frenéticas de futebol usando carros equipados com turbo e foguetes.";
    }

    //

    elseif($tipo == "Ação" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Celular"){
        $obra = "Pubg Mobile";
        $descricao = "Battle royale intenso onde 100 jogadores disputam a sobrevivência em mapas gigantescos.";
    }
    elseif($tipo == "Ação" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Computador"){
        $obra = "GTA Online";
        $descricao = "Mundo aberto focado no crime organizado, com assaltos complexos, corridas e disputas de território.";
    }
    elseif($tipo == "Ação" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Videogame"){
        $obra = "Destiny 2";
        $descricao = "Tiro em primeira pessoa de mundo compartilhado com longas missões, incursões e evolução de personagem.";
    }

    //Aventura

    elseif($tipo == "Aventura" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Celular"){
        $obra = "Sky: Children of the Light";
        $descricao = "explore reinos encantados e crie conexões com outros jogadores em sessões rápidas e relaxantes.";
    }
    elseif($tipo == "Aventura" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Computador"){
        $obra = "Fall Guys";
        $descricao = "Gincana e corrida de obstáculos multiplayer massiva com rodadas rápidas e eliminatórias caóticas.";
    }
    elseif($tipo == "Aventura" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Videogame"){
        $obra = "It Takes Two";
        $descricao = "Aventura de munndo aberto massivo com exploração, mistérios e combates elementares.";
    }

    //

    elseif($tipo == "Aventura" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Celular"){
        $obra = "Genshin Impact";
        $descricao = "RPG de aventura de mundo aberto massivo com exploração, mistérios e combates elementares.";
    }
    elseif($tipo == "Aventura" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Computador"){
        $obra = "Sea of Thieves";
        $descricao = "Viva a vida pirata explorando um vasto oceano, navegando com amigos e buscando tesouros perdidos.";
    }
    elseif($tipo == "Aventura" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Videogame"){
        $obra = "Red Dead Online";
        $descricao = "Explore a fronteira do Velho Oeste americano, realize missões, cace recompensas e monte seu acampamento.";
    }

    //RPG

    elseif($tipo == "RPG" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Celular"){
        $obra = "Guardian Tales";
        $descricao = "RPG de ação nostálgico em pixel art com masmorras rápidas, quebra-cabeça e combate ágil";
    }
    elseif($tipo == "RPG" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Computador"){
        $obra = "Diablo IV - Masmorras";
        $descricao = "Derrote hordas de demônios e colete equipamentos em masmorras curtas e focadas em ação.";
    }
    elseif($tipo == "RPG" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Videogame"){
        $obra = "Monster Hunter Rise";
        $descricao = "Caçadas cooperativas cheias de ação contra monstros gigantes que duram de 10 a 20 minutos.";
    }

    //

    elseif($tipo == "RPG" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Celular"){
        $obra = "Ragnarok Origin";
        $descricao = "MMORPG clássico adaptado para celular, com evolução de classes, clãs e centenas de missões.";
    }
    elseif($tipo == "RPG" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Videogame"){
        $obra = "Elden Ring - Modo Coop";
        $descricao = "Explore um vasto e perigoso mundo de fantasia sombria ao lado de aliados enfrentando chefes brutais";
    }
    elseif($tipo == "RPG" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Computador"){
        $obra = "Final Fantasy XIV";
        $descricao = "Um dos maiores MMORPGs da atualidade, com uma historia rica, masmorras e centenas de horas de conteúdo.";
    }

    //estratégia

    elseif($tipo == "Estratégia" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Celular"){
        $obra = "Clash Royale";
        $descricao = "Duelos rápidos de cartas em tempo real onde o objetivo é destruir as torres do adversário.";
    }
    elseif($tipo == "Estratégia" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Computador"){
        $obra = "Teamfight Tactics / TFT";
        $descricao = "Auto-battler estratégico onde você escala e posiciona campeões para batalhar automaticamente.";
    }
    elseif($tipo == "Estratégia" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Videogame"){
        $obra = "Inscryption";
        $descricao = "Um jogo de cartas sombrio baseado em turnos que mistura estratégia, quebra-cabeças e mistério.";
    }

    //

    elseif($tipo == "Estratégia" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Celular"){
        $obra = "Clash of Clans";
        $descricao = "Gerencie sua própria vila, treine tropas e participe de grandes guerras estratégicas de clãs.";
    }
    elseif($tipo == "Estratégia" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Computador"){
        $obra = "Age of Empires IV";
        $descricao = "Estratégia em tempo real clássica basseada em gerenciar recursos, evoluir civilizações e comandar exércitos.";
    }
    elseif($tipo == "Estratégia" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Videogame"){
        $obra = "Sid Meier's Civilization VI";
        $descricao = "Construa um império para resistir ao teste do tempo neste jogo de estratégia em turnos de escala global.";
    }

    //Sandbox

    elseif($tipo == "Sandbox" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Celular"){
        $obra = "Roblox - Mini-games";
        $descricao = "Uma plataforma com milhões de mundos virtuais criados por usuários com jogos casuais e rápidos";
    }
    elseif($tipo == "Sandbox" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Computador"){
        $obra = "Garry's Mod";
        $descricao = "Física livre sem objetivos definidos, perfeito para criar mini-games rápidos como esconde-esconde.";
    }
    elseif($tipo == "Sandbox" && $genero == "Eletronicos" && $tamanho == "Curtas" && $onde == "Videogame"){
        $obra = "Minecraft - Bed Wars";
        $descricao = "Partidas rápidas competitivas de proteção de base e destruição de camas inimigas com blocos.";
    }

    //

    elseif($tipo == "Sandbox" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Celular"){
        $obra = "Minecraft Mobile";
        $descricao = "Explore mundos infinitos, construa fortalezas e sobreviva coletando recursos na palma da sua mão.";
    }
    elseif($tipo == "Sandbox" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Computador"){
        $obra = "Rust";
        $descricao = "Sobrevivência extrema em um mapa persistente onde você constrói bases e defende seus recursos de rivais.";
    }
    elseif($tipo == "Sandbox" && $genero == "Eletronicos" && $tamanho == "Longas" && $onde == "Videogame"){
        $obra = "Ark: Survival Evoled";
        $descricao = "Sobreviva em uma ilha misteriosa povoada por dinossauros que podem ser domandos e montados";
    }
    

    //Tabuleiro

    elseif($tipo == "Tabuleiro" && $genero == "Tradicionais" && $tamanho == "Curtas" && $onde == "Mão"){
        $obra = "Quem Sou Eu?";
        $descricao = "Jogo de adivinhação rápida usando post-it na esta com perguntas de sim ou não acertando avança uma casa.";
    }

    //

    elseif($tipo == "Tabuleiro" && $genero == "Tradicionais" && $tamanho == "Longas" && $onde == "Mão"){
        $obra = "Banco Imobiliário";
        $descricao = "Negocie propriedades,construa casas e tente levar os seus oponentes à falência.";
    }

    //Cartas
    elseif($tipo == "Cartas" && $genero == "Tradicionais" && $tamanho == "Curtas" && $onde == "Mão"){
        $obra = "Uno";
        $descricao = "Livre-se de todas as cartas combinando cores ou números e atrapalhando os adversários.";
    }

    //

    elseif($tipo == "Cartas" && $genero == "Tradicionais" && $tamanho == "Longas" && $onde == "Mão"){
        $obra = "Baralho Tradicional/Truco ou Canastra";
        $descricao = "Jogos de cartas clássicos em duplas ou quartetos que exigem estratégia,blefe e muito tempo de mesa.";
    }
    else{
        $obra = "EA FC 2027";
        $descricao = "Jogo de Futebool";
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
        <img src="GameIA.jpg" width="200" alt="GeekIA Logo">
        <h2>Recomendação</h2>
        <strong>Obra:</strong>
        <?php echo $obra; ?>
        <br><br>
        <strong>Descrição:</strong>
        <?php echo $descricao; ?>
    </div>
    <br><br>
    <a href="index.html">Voltar</a>

</body>

</html>