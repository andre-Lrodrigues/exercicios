<?php
    include "classeInput.php";
    include "classeTextarea.php";
    include "cabecalho.php";

    $valor["type"] = "text";
    $valor["name"] = "titulo";

    if($_POST["produto"] == 'Filme'){
        echo '<p><b>Cadastro de Filmes</b></p>';
        $valor["placeholder"] = "Título do filme...";
    
        $i = new Input($valor);

        $valor["type"] = "number";
        $valor["name"] = "duracao";
        $valor["placeholder"] = "Tempo do duração (min)...";

        $i = new Input($valor);

        $valor["type"] = "text";
        $valor["name"] = "produtora";
        $valor["placeholder"] = "Produtora...";

        $i = new Input($valor);
    }
    else{
        echo '<p><b>Cadastro de Livros</b></p>';
        $valor["placeholder"] = "Título do livro...";
    
        $i = new Input($valor);

        $valor["type"] = "number";
        $valor["name"] = "paginas";
        $valor["placeholder"] = "Número de páginas...";

        $i = new Input($valor);

        $valor["type"] = "text";
        $valor["name"] = "editora";
        $valor["placeholder"] = "Editora...";

        $i = new Input($valor);
    }

    $valor["name"] = "sinopse";
    $valor["rows"] = 3;
    $valor["cols"] = 30;
    $valor["placeholder"] = "Sinopse...";

    $t = new Textarea($valor);

    $valor["type"] = "number";
    $valor["name"] = "preco";
    $valor["placeholder"] = "Preço...";

    $i = new Input($valor);

    $valor["type"] = "submit";
    $valor["value"] = "Cadastrar";

    $s = new Input($valor);
    echo '<input type="hidden" name="produto" value='.$_POST["produto"].' />';
?>
            </form>
        </section>
    </body>
</html>