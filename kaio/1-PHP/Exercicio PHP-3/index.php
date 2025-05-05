<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $numero = 23;

    if($numero % 10 == 0){
        echo "O número é divisível por 10, 5, 2";
    }
    else if($numero % 5 == 0){
        echo "O número é divisível por 5";
    } else if($numero % 2 == 0){
        echo "O número é divisível por 2";
    } else {
        echo "O número não é divisível por 10, 5, 2";
    }
    ?>
</body>
</html>