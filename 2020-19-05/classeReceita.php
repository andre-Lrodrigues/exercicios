<?php
    class Receita{
        public $tipo;
        public $ingredientes;
        public $preparo;
        public $nome;

        function __construct($valores){
            $this->tipo = $valores["tipo"];
            $this->ingredientes = $valores["ingredientes"];
            $this->preparo = $valores["preparo"];
            $this->nome = $valores["nome"];
        }
    }
?>