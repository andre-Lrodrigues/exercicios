<?php
    if(empty($_GET)){
        echo '
                <form method="get" action="index.php">
                    <fieldset>
                        <legend>Cadastrar animal:</legend>
                            Ave <input type="radio" name="tipo" value="Ave" /> | 
                            Anfíbio <input type="radio" name="tipo" value="Anfíbio" /> | 
                            Mamífero <input type="radio" name="tipo" value="Mamífero" /> | 
                            Peixe <input type="radio" name="tipo" value="Peixe" /> | 
                            Réptil <input type="radio" name="tipo" value="Réptil" /><br /><br />
                            <input type="submit" value="Próximo" />
                    </fieldset>
                </form>
                ';
    }
    else{
        echo '  <form method="get" action="instanciarAnimal.php">
                    <fieldset>
                        <legend>Cadastrar animal:</legend>
                        <input type="hidden" name="animal" value="'.$_GET["tipo"].'" />
                        <input type="number" min="0.01" step="0.01" name="peso" placeholder="Peso (Kg)..." requireed />
                        <input type="number" name="comprimento" placeholder="Comprimento (M)..." min="0" step="0.01" required />
                        <input type="number" name="altura" step="0.01" placeholder="Altura (metros)..." min="0" required />
                        <input type="text" name="cor" placeholder="Cor Predominante..." required />
                        <input type="text" name="nome" placeholder="Nome Espécie..." required />';
        if($_GET["tipo"] == "Ave"){
                  echo '<input type="number" min="0" placeholder="Altura Máxima de Vôo..." name="altvoo" required /><br /><br />';
        }
        elseif($_GET["tipo"] == "Mamífero"){
                  echo '<input type="number" min="0" placeholder="Velocidade Máxima" name="velocidade" required /><br /><br />';
        }
        elseif($_GET["tipo"] == "Peixe"){
                  echo '<input type="number" min="0" placeholder="Temperatura média que sobrevive..." name="temperatura" required /><br /><br />';
        }
        elseif($_GET["tipo"] == "Anfíbio" || $_GET["tipo"] == "Réptil"){
                  echo '<input type="number" min="0" placeholder="Tempo Máxima submerso..." name="submerso" required /><br /><br />';
        }
                echo '<input type="submit" value="Enviar" />
                      <input type="reset" value="Limpar" />
                      <a href="index.php"><input type="button" value="Voltar" /></a>
                    </fieldset>
                </form>';
    }
?>