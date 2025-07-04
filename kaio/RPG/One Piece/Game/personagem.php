<?php
// Incluir a classe dos personagens
require_once '../Classe/classes.php';

// Recebendo os dados de jogo.php via POST
$nome = $_POST['nome'] ?? '';
$akumaNoMi = $_POST['akumaNoMi'] ?? '';
$classificacao = $_POST['classificacao'] ?? '';
$raca = $_POST['raca'] ?? '';

// Aqui vamos associar nomes a classes
$classeDoPersonagem = [
    'Monkey D.Luffy' => 'Pirata',
    'Nico Robin' => 'Pirata',
    'Tony Tony Chopper' => 'Pirata',
    'Edward Newgate' => 'Yonko',
    'Kozuki Momonosuke' => 'Revolucionario',
    'Kozuki Toki' => 'Revolucionario',
    'Brook' => 'Pirata',
    'Charlotte LinLin' => 'Yonko',
    'Jewelry Bonney' => 'Revolucionario',
    'Charlotte Katakuri' => 'Shishibukai',
    'Donquixote Doflamingo' => 'Shishibukai',
    'Marshall D.Teach' => 'Yonko',
    'Buggy' => 'Shishibukai',
    'Rob Lucci' => 'GovernoMundial',
    'Crocodile' => 'Shishibukai'
];

// Associação nome → imagem
$imagensPersonagens = [
    'Monkey D.Luffy' => 'luffy.jpg',
    'Nico Robin' => 'robin.jpg',
    'Tony Tony Chopper' => 'chopper.jpg',
    'Edward Newgate' => 'barbaBranca.jpg',
    'Kozuki Momonosuke' => 'momonosuke.jpg',
    'Kozuki Toki' => 'toki.jpg',
    'Brook' => 'brook.jpg',
    'Charlotte LinLin' => 'bigMom.jpg',
    'Jewelry Bonney' => 'bonney.jpg',
    'Charlotte Katakuri' => 'katakuri.jpg',
    'Donquixote Doflamingo' => 'doflamingo.jpg',
    'Marshall D.Teach' => 'barbaNegra.jpg',
    'Buggy' => 'buggy.jpg',
    'Rob Lucci' => 'robLucci.jpg',
    'Crocodile' => 'crocodile.jpg'
];

// Descobre a classe e imagem
$classe = $classeDoPersonagem[$nome] ?? '';
$imagem = $imagensPersonagens[$nome] ?? 'default.png';

// Verifica se é uma classe válida
$classesDisponiveis = ['Pirata', 'Marine', 'GovernoMundial', 'Revolucionario', 'Shishibukai', 'Yonko', 'Ciborgue'];

if (!in_array($classe, $classesDisponiveis)) {
    die("Classe inválida.");
}

$personagem = new $classe();
$personagem->__set('classe', $classe);
$personagem->__set('classificacao', $classificacao);
$personagem->__set('raca', $raca);

// Define os atributos do personagem no grafico
$ofensividade = $personagem->__get('ofensividade');
$defesa = $personagem->__get('defesa');
$ataque = $personagem->__get('ataque');
$velocidade = $personagem->__get('velocidade');
$inteligencia = $personagem->__get('inteligencia');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personagem</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="icon" href="../img/iconSite.png">
    <style>
        body {
            background-color: #f0f0f0;
        }

        .section {
            padding: 2rem 1.5rem;
        }

        .box {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .image img {
            border-radius: 50%;
            border: 3px solid #ddd;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .title {
            color: rgb(8, 54, 122);
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .subtitle {
            color: #555;
            font-size: 1.25rem;
            margin-bottom: 1rem;
        }

        .button.is-success {
            background-color: #48c774;
            color: white;
        }

        .button.is-info {
            background-color: #209cee;
            color: white;
        }

        .columns {
            margin-top: 1rem;
        }

        .content p {
            margin-bottom: 0.5rem;
        }

        canvas {
            width: 690px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title has-text-centered">Personagem: <?= htmlspecialchars($nome) ?></h1>
            <h2 class="subtitle has-text-centered">Detalhes do personagem</h2>

            <div class="box">
                <div class="columns is-vcentered">
                    <div class="column is-one-third">
                        <figure class="image">
                            <img src="../img/<?= $imagem ?>" alt="Imagem do personagem" class="is-rounded">
                        </figure>
                    </div>
                    <div class="column">
                        <div class="content">
                            <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
                            <p><strong>Classe:</strong> <?= htmlspecialchars($personagem->__get('classe')) ?></p>
                            <p><strong>Raça:</strong> <?= htmlspecialchars($personagem->__get('raca')) ?></p>
                            <p><strong>Akuma no Mi:</strong> <?= htmlspecialchars($akumaNoMi) ?></p>
                            <p><strong>Classificação da Akuma:</strong> <?= htmlspecialchars($classificacao) ?></p>
                            <p><strong>Descrição:</strong> <?= htmlspecialchars($personagem->__get('descricao')) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <canvas id="graficoAtributos"></canvas>
            <div class="content has-text-centered mt-5">
                <p><strong>Ofensividade:</strong> <?= $ofensividade ?></p>
                <p><strong>Defesa:</strong> <?= $defesa ?></p>
                <p><strong>Ataque:</strong> <?= $ataque ?></p>
                <p><strong>Velocidade:</strong> <?= $velocidade ?></p>
                <p><strong>Inteligência:</strong> <?= $inteligencia ?></p>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('graficoAtributos').getContext('2d');
        new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ['Ofensividade', 'Defesa', 'Ataque', 'Velocidade', 'Inteligência'],
                datasets: [{
                    label: 'Atributos de <?= addslashes($nome) ?>',
                    data: [<?= "$ofensividade, $defesa, $ataque, $velocidade, $inteligencia" ?>],
                    backgroundColor: 'rgba(30, 144, 255, 0.2)',
                    borderColor: 'rgba(30, 144, 255, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(30, 144, 255, 1)'
                }]
            },
            options: {
                scales: {
                    r: {
                        beginAtZero: true,
                        max: 120,
                        ticks: {
                            stepSize: 20
                        },
                        pointLabels: {
                            font: {
                                size: 14
                            }
                        }
                    }
                }
            }
        });
    </script>

    <div class="buttons is-centered">
        <button class="button is-success" onclick="alert(`<?= addslashes($personagem->ataqueEspecial()) ?>`)">Usar Ataque Especial</button>
        <a href="jogo.php" class="button is-info">Voltar</a>
    </div>
</body>

</html>