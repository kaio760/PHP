<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $a = 3;
    $b = 5;
    $c = 10;
    $d = 9;

    $soma = $a + $c; // total é 13
    $multi = $b + $d; // total é 14

    if($soma > $multi){
        echo "A+C é maior que B+D";
    }

    else if($soma < $multi){
        echo "A+C é menor que B+D";
    }

    else{
        echo "A+C é igual a B+D";
    }
    ?>
</body>
</html>