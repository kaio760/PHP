<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrevista</title>
</head>

<body>
    <!--Uma firma fez uma pesquisa de mercado para saber se as pessoas gostaram ou não de um novo produto lançado.
    Para isso forneceu o sexo (M / F) do entrevistado e sua resposta (S / N).
    Sabe-se que entrevistaram 10 pessoas. Faça um algoritmo que calcule e mostre: ​
    O número de pessoas que respondeu sim; ​
    O número de pessoas que respondeu não; ​
    A porcentagem de homens que respondeu Não entre todos os homens analisados. ​
    A porcentagem de mulheres que respondeu Não entre todos as mulheres analisadas.-->

    <h1>Pessoas entrevistadas</h1>
    <form method="GET" action="index.php">
        <label>Selecione seu sexo</label>
        <select name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select><br><br>

        <label>Você curtiu o produto do nosso lançamento?</label>
        <select name="Resposta" required>
            <option value="S">Sim</option>
            <option value="N">Não</option>
        </select><br><br>

        <input type="submit" value="Enviar" name="enviar">

    </form>
    <?php
    $entrevistados = $_GET['entrevistados'] ?? 0;
    $totalSim = $_GET['totalSim'] ?? 0;
    $totalNao = $_GET['totalNao'] ?? 0;
    $masculino = $_GET['masculino'] ?? 0;
    $feminino = $_GET['feminino'] ?? 0;
    $masculinoSim = $_GET['masculinoSim'] ?? 0;
    $femininoSim = $_GET['femininoSim'] ?? 0;
    $masculinoNao = $_GET['masculinoNao'] ?? 0;
    $femininoNao = $_GET['femininoNao'] ?? 0;
    $sexo = $_GET['sexo'];
    $resposta = $_GET['Resposta'];


    if (isset($_GET['enviar'])) {
        $entrevistados++;
        $sexo = $_GET['sexo'];
        $resposta = $_GET['Resposta'];

        // Incrementa o contador de entrevistados
        if ($resposta == 'S') {
            $totalSim++;
            if ($sexo == 'M') {
                $masculinoSim++;
            } else {
                $femininoSim++;
            }
        } else {
            $totalNao++;
            if ($sexo == 'M') {
                $masculinoNao++;
            } else {
                $femininoNao++;
            }
        }
    }

    if ($entrevistados <10) {
        echo "<h2>Entreviste mais pessoas</h2>";
    } else {
        echo "<h2>Total de pessoas que responderam sim: $totalSim</h2>";
        echo "<h2>Total de pessoas que responderam não: $totalNao</h2>";

        if ($masculino > 0) {
            $porcentagemMasculinoNao = ($masculinoNao / $masculino) * 100;
            echo "<h2>Porcentagem de homens que respondeu Não: " . number_format($porcentagemMasculinoNao, 2) . "%</h2>";
        } else {
            echo "<h2>Nenhum homem foi entrevistado.</h2>";
        }

        if ($feminino > 0) {
            $porcentagemFemininoNao = ($femininoNao / $feminino) * 100;
            echo "<h2>Porcentagem de mulheres que respondeu Não: " . number_format($porcentagemFemininoNao, 2) . "%</h2>";
        } else {
            echo "<h2>Nenhuma mulher foi entrevistada.</h2>";
        }
    }
    ?>
</body>

</html>