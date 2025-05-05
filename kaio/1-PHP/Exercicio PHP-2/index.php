<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numero1 = 10;
    $numero2 = 10;

    $soma = $numero1 + $numero2;

    if($soma > 20){
        $conclusao = $soma + 8;
        echo "A soma é maior que 20";
    }
    else if($soma < 20){
        $conclusao = $soma - 5;
        echo "A soma é menor que 20";
    }
    else{
        $conclusao = $soma -5;
        echo "A soma é igual a 20";
    }
    ?>
</body>
</html>