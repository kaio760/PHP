<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fones de Ouvido</h1>
    <h3>Lista de Fones</h3>
</body>
</html>

<?php
class fone
{
    public $marca = null;
    public $modelo = null;
    public $cor = null;
    public $bluetooth = null;
    public $dimensoes = null;
    public $frequencia = null;
    public $peso = null;

    public function MostraAtributo()
    {
        return "Marca: $this->marca  Modelo: $this->modelo Cor: $this->cor Bluetooth: $this->bluetooth Dimensoes: $this->dimensoes Frequencia: $this->frequencia Peso: $this->peso <br>";
    }

    public function PegaAtributo($fabricante, $modelo, $cor, $bluetooth, $dimensoes, $frequencia, $peso){
        $this ->  marca  = $fabricante;
        $this -> modelo = $modelo;
        $this -> cor = $cor;
        if($bluetooth){
            $this -> bluetooth = "Sim";
        }
        else{
            $this -> bluetooth= "Não";
        }
        $this -> dimensoes = $dimensoes;
        $this -> frequencia = $frequencia;
        $this -> peso = $peso;
    }
}

$fone1 = new fone();
$fone1 -> PegaAtributo("Samsung", "Galaxy Buds", "Preto", true, "2.5 x 1.5 x 1.5 cm", "20 Hz - 20 kHz", "6 g");

$fone2 = new fone();
$fone2 -> PegaAtributo("Apple", "AirPods Pro", "Branco", true, "2.4 x 1.8 x 1.7 cm", "20 Hz - 20 kHz", "5.4 g");

$fone3 = new fone();
$fone3 -> PegaAtributo("Sony", "MDR-ZX110", "Preto", false, "2.5 x 2.0 x 2.0 cm", "12 Hz - 22 kHz", "120 g");



echo $fone1 -> MostraAtributo() . "<br>";
echo $fone2 -> MostraAtributo() . "<br>";
echo $fone3 -> MostraAtributo() . "<br>";
echo "<br>";
?>
