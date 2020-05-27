<?php
    abstract class Produto{
        public $titulo;
        public $sinopse;
        public $preco;

        public function exibe2(){
            echo "Título: $this->titulo <br />";
            echo "Sinopse: $this->sinopse <br />";
            echo 'Preço: R$'.number_format($this->preco,2).' <br />';
        }
    }

?>