<?php
    session_start();
    include "classeReceita.php";

    $r = new Receita($_POST);

    $_SESSION["Receita"][] = $r;

    echo '<script>
             window.alert("Receita salva com sucesso! \nRedirecionando para página de cadastro.");
             window.location.href = "form_receita.php";
          </script>';
?>