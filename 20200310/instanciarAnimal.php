<?php
    session_start();

    switch($_GET["animal"]){
        case "Réptil":
        case "Anfíbio":
            include "classeAnfire.php";
            $animal = new Anfire();
            $animal->tempMaxSub = $_GET["submerso"]; break;
        case "Mamífero":
            include "classeMamifero.php";
            $animal = new Mamifero();
            $animal->velocidadeMax = $_GET["velocidade"]; break;
        case "Peixe":
            include "classePeixe.php";
            $animal = new Peixe();
            $animal->TemperaturaMedia = $_GET["temperatura"]; break;
        case "Ave":
            include "classeAve.php";
            $animal = new Ave();
            $animal->alturaVooMax = $_GET["altvoo"]; break;
    }
    $animal->tipo = $_GET["animal"];
    $animal->peso = $_GET["peso"];
    $animal->comprimento = $_GET["comprimento"];
    $animal->altura = $_GET["altura"];
    $animal->corPredominante = $_GET["cor"];
    $animal->nome = $_GET["nome"];

    $_SESSION["animal"][] = $animal;
?>
<script>
    window.alert("Animal cadastrado com sucesso!");
    window.location.href = "index.php";
</script>