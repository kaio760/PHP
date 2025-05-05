<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior e menor</title>
</head>

<body>
    <h2>Numeros maior e menor dos numeros reais digitados pelo usuario</h2>

    <form method="POST" action="Index.php">
        <label>Digite um numero:</label><br>
        <input type="number" name="numero" required><br><br>
        <label>Escolha uma operação:</label><br>
        <input type="submit" value="Enviar" name="enviar"><br><br>
    </form>

    <?php
        $maior = 0;
        $menor = 0;
    // Verifica se o formulário foi enviado
    echo "<h3>Numeros digitados:</h3>";
    while (true) {
        if ($maior > $menor) {
            echo "$maior é o maior número <br>";
        } else {
            echo "$menor é o menor número <br>";
        }
    }
    ?>
</body>

</html>