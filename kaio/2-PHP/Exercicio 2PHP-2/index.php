<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Par</title>
</head>

<body>
    <h1>Numeros pares entre 1.000 e 2.000</h1>

    <?php
    $numero = 1000;// Loop para verificar números de 1.000 a 2.000
    
    if ($numero >= 1000 && $numero <= 2000) {
        for ($i = 1000; $i <= 2000; $i++) {
            if ($i % 2 == 0) {
                echo "$i o numero é par <br>";
            }
        }
    }
    ?>
</body>

</html>