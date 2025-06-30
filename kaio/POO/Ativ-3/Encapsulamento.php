<?php

class Pai
{
    private $nome = 'Anakin';
    protected $sobrenome = 'Skywalker';
    public $objetivo = 'vingança';

    public function  __get($attr)
    {
        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        return $this->$attr = $value;
    }

    private function sabre()
    {
        echo 'Vermelho';
    }

    protected function frase()
    {
        echo 'a capacidade de destruir um planeta é insignificante comparada com o poder da Força';
    }

    public function exercutarAcao()
    {
        $x = rand(1, 10);

        if ($x >= 1 && $x <= 8) {
            $this->sabre();
        } else {
            $this->frase();
        }
    }
}

class Filho extends Pai
{
    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    private function sabre()
    {
        echo 'Verde';
    }

    public function x()
    {
        $this->sabre();
    }

    protected function frase()
    {
        echo 'Que a força esteja com você';
    }

    public function getAtributo ($attr) {
        return $this->$attr;
    }

    public function setAtributo($attr, $value) {
        $this->$attr = $value;
    }
}

$filho = new Filho();

    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    $fiho->sabre();
    echo '<br/>';
    $filho->x();


?>