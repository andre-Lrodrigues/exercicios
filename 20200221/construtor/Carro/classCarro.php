<?php
    class Carro{
        //Lista de atributos
        private $cor;
        private $qtd_porta;
        private $velocidade_max;
        public $velocidade_atual;

        //Lista de métodos
        public function __construct($c, $q, $v){
            $this->cor = $c;
            $this->qtd_porta = $q;
            $this->velocidade_max = $v;
            $this->velocidade_atual = 0;
        }

        public function get_cor(){
            return($this->cor);
        }
        public function get_qtd_porta(){
            return($this->qtd_porta);
        }
        public function get_velocidade_max(){
            return($this->velocidade_max);
        }
        public function get_velocidade_atual(){
            return($this->velocidade_atual);
        }


        /////////////
        public function acelerar($valor_aceleracao, $tempo){
            $this->velocidade_atual = 
                $this->velocidade_atual + $valor_aceleracao*$tempo;
        }
        public function frear($valor_frenagem, $tempo){
            $this->velocidade_atual = 
                $this->velocidade_atual + $valor_freagem*$tempo;
        }
        public function virar($lado){
            //implementação
        }
    }
?>