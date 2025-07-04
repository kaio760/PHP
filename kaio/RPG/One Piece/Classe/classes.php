<?php

    //as 3 classificações de akumas no mi

    abstract class Classes {
        public $ofensividade, $defesa, $ataque, $velocidade, $inteligencia, $img, $descricao;

        //metodos
        public function ataqueComum(){echo ("Ataque Comum (50)<br>");}
        public function defesaComum(){echo ("Defesa Comum (30)<br>");}
        public function ataqueEspecial(){echo ("Ataque Especial (100)<br>");}
        public function recuperarEnergia(){echo ("Recuperar Energia (20)<br>");}
        public function regenerarVida(){echo ("Regenerar Vida (10)<br>");}

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }
        
        public function __get($atributo) {
            return $this->$atributo;
        }
    }

    class Pirata extends Classes {
        public function __construct() {
            $this->ofensividade = 80;
            $this->defesa = 60;
            $this->ataque = 90;
            $this->velocidade = 70;
            $this->inteligencia = 50;
            $this->img = "pirata.png";
            $this->descricao = "Piratas são aventureiros destemidos, sempre em busca de tesouros e glória.";
        }

        public function ataqueEspecial() {
            echo ("Ataque Especial: Golpe do Capitão (150)");
            echo ("Descrição: Um ataque poderoso que causa dano massivo ao inimigo, mas consome muita energia.");
        }
    }

    class Marine extends Classes {
        public function __construct() {
            $this->ofensividade = 70;
            $this->defesa = 80;
            $this->ataque = 60;
            $this->velocidade = 50;
            $this->inteligencia = 90;
            $this->img = "marine.png";
            $this->descricao = "Marines são defensores da justiça, sempre prontos para combater o crime.";
        }

        public function ataqueEspecial() {
            return "Ataque Especial: Justiça Implacável (120)";
            return "Descrição: Um ataque que causa dano considerável e reduz a velocidade do inimigo.";
        }
    }

    class GovernoMundial extends Classes {
        public function __construct() {
            $this->ofensividade = 100;
            $this->defesa = 90;
            $this->ataque = 70;
            $this->velocidade = 60;
            $this->inteligencia = 80;
            $this->img = "governo_mundial.png";
            $this->descricao = "O Governo Mundial é uma organização poderosa que controla os mares e busca manter a ordem.";
        }

        public function ataqueEspecial() {
            return "Ataque Especial: Ordem Suprema (140)";
            return "Descrição: Um ataque devastador que causa dano massivo e enfraquece os inimigos.";
        }
    }

    class Revolucionario extends Classes {
        public function __construct() {
            $this->ofensividade = 90;
            $this->defesa = 70;
            $this->ataque = 80;
            $this->velocidade = 60;
            $this->inteligencia = 100;
            $this->img = "revolucionario.png";
            $this->descricao = "Revolucionários lutam contra a opressão e buscam liberdade para todos.";
        }

        public function ataqueEspecial() {
            return "Ataque Especial: Revolução Poderosa (130)";
            return "Descrição: Um ataque que causa dano significativo e aumenta a moral dos aliados.";
        }
    }

    class Shishibukai extends Classes {
        public function __construct() {
            $this->ofensividade = 85;
            $this->defesa = 75;
            $this->ataque = 95;
            $this->velocidade = 65;
            $this->inteligencia = 70;
            $this->img = "shichibukai.png";
            $this->descricao = "Shichibukai são piratas que trabalham com o Governo Mundial, oferecendo proteção em troca de liberdade.";
        }

        public function ataqueEspecial() {
            return "Ataque Especial: Poder do Shichibukai (110)";
            return "Descrição: Um ataque que causa dano considerável e pode atordoar o inimigo.";
        }
    }

    class Yonko extends Classes {
        public function __construct() {
            $this->ofensividade = 95;
            $this->defesa = 85;
            $this->ataque = 100;
            $this->velocidade = 75;
            $this->inteligencia = 90;
            $this->img = "yonko.png";
            $this->descricao = "Os Yonkos são os piratas mais poderosos do mundo, governando vastas áreas do mar.";
        }

        public function ataqueEspecial() {
            return "Ataque Especial: Domínio dos Mares (160)";
            return "Descrição: Um ataque devastador que causa dano massivo e pode causar medo nos inimigos.";
        }
    }

    class Ciborgue extends Classes {
        public function __construct() {
            $this->ofensividade = 75;
            $this->defesa = 95;
            $this->ataque = 65;
            $this->velocidade = 55;
            $this->inteligencia = 85;
            $this->img = "ciborgue.png";
            $this->descricao = "Ciborgues são seres humanos aprimorados com tecnologia, oferecendo força e resistência excepcionais.";
        }

        public function ataqueEspecial() {
            return "Ataque Especial: Tecnologia Avançada (100)";
            return "Descrição: Um ataque que causa dano considerável e pode desativar as habilidades do inimigo.";
        }
    }
    

?>