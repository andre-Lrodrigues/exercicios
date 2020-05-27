<?php
    require_once "classeProduto.php";

    class Filme extends Produto{
        public $duracao;
        public $produtora;

        public function __construct($post){
            $this->titulo = $post["titulo"];
            $this->sinopse = $post["sinopse"];
            $this->preco = $post["preco"];
            $this->duracao = $post["duracao"];
            $this->produtora = $post["produtora"];
        }

        public function exibe(){
            echo "<nav class='exibe'>";
            $this->exibe2();
            echo "Duração: $this->duracao minutos<br />";
            echo "Produtora: $this->produtora <hr />";
            echo "</nav>";
        }
    }

?>