<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Fones de Ouvido</h1>
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

    //Marca
    function setMarca($marca)
    {
        $this->marca = $marca;
    }

    function getMarca()
    {
        return "Marca: $this->marca <br>";
    }

    function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function get($atributo)
    {
        return $atributo . ": " . $this->$atributo . "<br>";
    }
}

$fone_OverEar = new fone;

$fone_OverEar->setMarca("Sony");
echo $fone_OverEar->getMarca();


    $fone_OverEar->set("modelo", "WH-1000XM4");
    $fone_OverEar->set("cor", "Preto");
    $fone_OverEar->set("bluetooth", "Sim");
    $fone_OverEar->set("dimensoes", "20x15x10 cm");
    $fone_OverEar->set("frequencia", "20Hz - 20kHz");
    $fone_OverEar->set("peso", "250g");

    echo $fone_OverEar->get("modelo");
    echo $fone_OverEar->get("cor");
    echo $fone_OverEar->get("bluetooth");
    echo $fone_OverEar->get("dimensoes");
    echo $fone_OverEar->get("frequencia");
    echo $fone_OverEar->get("peso");
?>