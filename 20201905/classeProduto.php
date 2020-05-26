<?php
    abstract class Produto{
        public $titulo;
        public $sinopse;
        public $preco;
    }

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
    }

    class Livro extends Produto{
        public $paginas;
        public $editora;

        public function __construct($post){
            $this->titulo = $post["titulo"];
            $this->sinopse = $post["sinopse"];
            $this->preco = $post["preco"];
            $this->paginas = $post["paginas"];
            $this->editora = $post["editora"];
        }
    }
?>