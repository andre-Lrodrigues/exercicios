<?php
    include "classCarro.php";
    include "cabecalho.php";

    $c = new Carro($_POST["cor"], $_POST["qtd_porta"], $_POST["velocidade_max"]);

    $_SESSION["carro"][] = $c;
?>
    <h3>Carro inserido com sucesso!</h3>
    </body>
</html>