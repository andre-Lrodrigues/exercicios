<?php
    include "classCarro.php";
    include "cabecalho.php";

    $id = $_POST["id"];
    $tipo = $_POST["tipo"];
    $aceleracao_frenagem = $_POST["acelerar_frear"];
    $tempo = $_POST["tempo"];

    if($tipo == "a"){
        $_SESSION["carro"]["$id"]->acelerar($tempo,$aceleracao_frenagem); // Chama a "public function" de mesmo nome que foi atribuida ao objeto 
    }else{
        $_SESSION["carro"]["$id"]->frear($tempo,$aceleracao_frenagem);
    }

    header("Location: listarCarros.php");
?>