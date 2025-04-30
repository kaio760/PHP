<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso Ideal</title>
</head>
<body>
    <?php

    // Definindo variáveis de peso, altura e sexo
    $altura = 1.72; // altura em metros
    $peso = 58; // peso em kg
    $sexo = "M"; // sexo: "M" para masculino, "F" para feminino

    //Peso e altura masculino
    if ($sexo == "M"){
        if ($peso <58 || $altura < 1.72) {
            echo "Abaixo do peso ideal";
        }
        else if ($peso >74 || $altura > 1.82){
            echo "Acima do peso ideal";
        }
        else{
            echo "Peso ideal";
        }
    }
    //Peso e altura feminino
    if($sexo == "F"){
        if ($peso < 44.7 || $altura < 1.62){
            echo "Abaixo do peso ideal";
        }
        else if ($peso > 65.7 || $altura > 1.72){
            echo "Acima do peso ideal";
        }
        else{
            echo "Peso ideal";
        }
    } 

    ?>
</body>
</html>