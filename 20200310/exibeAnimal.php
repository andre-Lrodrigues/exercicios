<?php
    echo '
        <style>
            section{
                border: solid black 1px;
                padding: 1em;
                margin: 12px 800px;
                background: #EEE9E9;
            }
        </style>
        <a href="index.php">Início</a> | 
        <a href="exibeAnimal.php">Exibir animais</a> | 
        <a href="limpar.php">Limpar registros</a><hr />';

    include "classeAve.php";
    include "classeAnfire.php";
    include "classeMamifero.php";
    include "classePeixe.php";
    session_start();
    if(!empty($_SESSION["animal"])){

        foreach ($_SESSION["animal"] as $a){
            echo " <section>
                        <p>$a->tipo: $a->nome</span></p>
                        <p>Peso: $a->peso Kg</p>
                        <p>Comprimento: $a->comprimento metros</p>
                        <p>Altura: $a->altura metros</p>
                        <p>Cor predominante: $a->corPredominante</p>
                        ";
                        if($a->tipo == "Réptil" || $a->tipo == "Anfíbio"){
                            echo "<p>Tempo max. submerso: $a->tempMaxSub minutos</p>";
                        }
                        elseif($a->tipo == "Ave"){
                            echo "<p>Altura max. de vôo: $a->alturaVooMax metros</p>";
                        }
                        elseif($a->tipo == "Peixe"){
                            echo "<p>Altura max. de vôo: $a->TemperaturaMedia ºC</p>";
                        }
                        elseif($a->tipo == "Mamifero"){
                            echo "<p>Altura max. de vôo: $a->velocidadeMax Km/h</p>";
                        }
                   echo '</section>';
        }
    }
    else{
        echo '<section>
                <h3>Nenhum animal catalogado!</h3><br /><br />
              </section>';
    }
?>