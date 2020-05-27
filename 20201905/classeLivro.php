<?php
    require_once "classeProduto.php";
    
    class Livro extends Produto{
        public $pagina;
        public $editora;

        public function __construct($post){
            $this->titulo = $post["titulo"];
            $this->sinopse = $post["sinopse"];
            $this->preco = $post["preco"];
            $this->pagina = $post["paginas"];
            $this->editora = $post["editora"];
        }

        public function exibe(){
            echo "<nav class='exibe'>";
            $this->exibe2();
            echo "Páginas: $this->pagina <br />";
            echo "Editora: $this->editora <hr />";
            echo "</nav>";
        }
    }
?>