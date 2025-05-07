<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<!--Faça um algoritmo que mostre a tabuada de qualquer número escolhido pelo usuário
    (considerar tabuada do número 1 ao 10). -->
    <h1>Tabuada do 1 até 10</h1>

<?php
$numero = 10;
echo "digite um numero para ver a tabuada: <br>";

for ($i=1;$i<=10;$i++){
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}
?>
    
</body>
</html>