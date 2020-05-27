<?php    
    if($_POST["produto"] == 'Livro'){
        include "classeLivro.php";
        $p = new Livro($_POST);
    }
    elseif($_POST["produto"] == 'Filme'){
        include "classeFilme.php";
        $p = new Filme($_POST);
    }
    session_start();

    $_SESSION["produto"][] = $p;
?>

<meta charset="UTF-8" />
<script>
    window.alert("Produto cadastrado com sucesso! \nRedirecionando para página inicial de seleção.");
    window.location.href = "index.php";
</script>