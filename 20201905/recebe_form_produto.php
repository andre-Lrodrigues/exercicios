<?php
    include "classeProduto.php";
    session_start();

    if($_POST["produto"] == 'Livro'){
        $p = new Livro($_POST);
    }
    elseif($_POST["produto"] == 'Filme'){
        $p = new Filme($_POST);
    }

    $_SESSION["produto"][] = $p;

    // var_dump($_SESSION["produto"]);

    echo '<script>
             window.alert("Produto cadastrado com sucesso! \nRedirecionando para página de seleção.");
             window.location.href = "index.html";
          </script>';
?>