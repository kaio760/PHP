<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero primo</title>
</head>
<body>
    <h1>Imprimir numeros primos de 1 a 100</h1>
    <?php
    // Loop para verificar números de 1 a 100

    for ($i = 2; $i < 100; $i++) {
        $numeroPrimo = true;
    
        // Verifica se o número é primo
        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $numeroPrimo = false;
                break;
            }
        }
    
        if ($numeroPrimo) {
            echo "$i é primo<br>"; // imprime o número primo
        }
    }
    ?>
</body>
</html>