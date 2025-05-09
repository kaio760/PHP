<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--Crie um programa usando while que vai rodar e alimentar um array com 6 numeros sorteados de 1 a 60.
    use a função in_array para que não seja inserido o número repetido.-->
    <h1>Numeros sorteados</h1>

    <?php
    $numerosSorteados = [];

    while (count($numerosSorteados) <=6) {
        $numeros = rand(1, 60);
        if (!in_array($numeros, $numerosSorteados)) {
            $numerosSorteados[] = $numeros;
        }
    }
    echo "🎲<br>";

    echo "Os numeros sorteados foram:";
    foreach ($numerosSorteados as $vetor) {
        
        echo ",", " $vetor ";
    }
    // for($i=0; $i<6;$i++){
    // echo " $numerosSorteados[$i]",",";
    // }

    ?>
</body>

</html>