<?php
    include "classClasseNome.php";
    $c = new ClasseNome($_POST["v1"], $_POST["v2"], $_POST["v3"]);

    var_dump($c);       //Esta função descreve os detalhes da variável selecionada
?>