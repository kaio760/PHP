<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informacoes de akuma no mi</title>
</head>

<body>
    <h1>Dados de Akuma no Mi</h1>

    <?php
    // Definindo a classe abstrata AkumaNoMi
    abstract class AkumaNoMi
    {
        public $nome = null;
        public $cor = null;
        public $usuario = null;
        public $poderes = null;

        // Métodos abstratos que devem ser implementados nas classes filhas
        public function corporal()
        {
            return "Se torna um corpo com propriedades específicas.";
        }

        public function emissao()
        {
            return "O usuário produz algo: O usuário não vira o elemento, apenas o cria/controla.";
        }

        public function manipulacao()
        {
            return "O usuário altera o ambiente ou leis físicas: O usuário “ganha um poder”, não se torna nada em si.";
        }

        public function despertar()
        {
            return "O auge total da bruta, onde o usuário expande suas habilidades.";
        }


        public function set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        public function get($atributo)
        {
            return $atributo . ": " . $this->$atributo . "<br>";
        }
    }

    // Classes que herdam de AkumaNoMi
    class Zoan extends AkumaNoMi
    {
        public $animal = null;
    }

    class Logia extends AkumaNoMi
    {
        public $elemento = null;
    }

    class Paramecia extends AkumaNoMi
    {
        public $sobrenatural = null;
    }


    $meraMera = new Logia();
    $tokiToki = new Paramecia();
    $hitoHito = new Zoan();


    // Definindo os atributos do Mera Mera no Mi
    $meraMera->set('nome', 'Mera Mera no Mi');
    $meraMera->set('cor', 'Vermelho');
    $meraMera->set('usuario', 'Portgas D. Ace');
    $meraMera->set('poderes', 'Controle do Fogo, Criação de Chamas, Imunidade ao Fogo');
    $meraMera->set('corporal', 'Se torna um corpo com propriedades específicas.');
    $meraMera->set('despertar', 'Sem despertar conhecido');


    echo "<hr>";
    echo "<b>" . $meraMera->get("nome") . "</b>";
    echo "<br>";
    echo "<b>" . $meraMera->get("cor") . "</b>";
    echo "<br>";
    echo "<b>" . $meraMera->get("usuario") . "</b>";
    echo "<br>";
    echo "<b>" . $meraMera->get("poderes") . "</b>";
    echo "<br>";
    echo "<b>" . $meraMera->get("corporal") . "</b>";
    echo "<br>";
    echo "<b>" . $meraMera->get("despertar") . "</b>";
    echo "<br>";
    echo "<b>" . $meraMera->elemento . "</b>";
    echo "<hr>";


    // Definindo os atributos do Toki Toki no Mi
    $tokiToki->set('nome', 'Toki Toki no Mi');
    $tokiToki->set('cor', 'Desconhecida');
    $tokiToki->set('usuario', 'Toki');
    $tokiToki->set('poderes', 'Controle do Tempo, Viagem no Tempo, Previsão do Futuro');
    $tokiToki->set('corporal', 'Se torna um corpo com propriedades específicas.');
    $tokiToki->set('despertar', 'Sem despertar conhecido');

    echo "<hr>";
    echo "<b>" . $tokiToki->get("nome") . "</b>";
    echo "<br>";
    echo "<b>" . $tokiToki->get("cor") . "</b>";
    echo "<br>";
    echo "<b>" . $tokiToki->get("usuario") . "</b>";
    echo "<br>";
    echo "<b>" . $tokiToki->get("poderes") . "</b>";
    echo "<br>";
    echo "<b>" . $tokiToki->get("corporal") . "</b>";
    echo "<br>";
    echo "<b>" . $tokiToki->get("despertar") . "</b>";
    echo "<br>";
    echo "<b>" . $tokiToki->sobrenatural . "</b>";
    echo "<hr>";

    // Definindo os atributos do Hito Hito no Mi modelo nika
    $hitoHito->set('nome', 'Hito Hito no Mi, modelo Nika');
    $hitoHito->set('cor', 'Roxo');
    $hitoHito->set('usuario', 'Monkey D. Luffy');
    $hitoHito->set('poderes', 'Controle do Sol, Liberdade, Alegria');
    $hitoHito->set('corporal', 'Se torna um corpo com propriedades específicas.');
    $hitoHito->set('despertar', 'Despertar conhecido como "Nika", onde o usuario altera a realidade.');

    echo "<hr>";
    echo "<b>" . $hitoHito->get("nome") . "</b>";
    echo "<br>";
    echo "<b>" . $hitoHito->get("cor") . "</b>";
    echo "<br>";
    echo "<b>" . $hitoHito->get("usuario") . "</b>";
    echo "<br>";
    echo "<b>" . $hitoHito->get("poderes") . "</b>";
    echo "<br>";
    echo "<b>" . $hitoHito->get("corporal") . "</b>";
    echo "<br>";
    echo "<b>" . $hitoHito->get("despertar") . "</b>";
    echo "<br>";
    echo "<b>" . $hitoHito->animal . "</b>";
    echo "<hr>";
    
    ?>
</body>

</html>