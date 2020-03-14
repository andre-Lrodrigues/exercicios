<?php
    include "classCarro.php";
    include "cabecalho.php";
    echo '<h2>Objetos "Carro" instanciados no sistema:</h2>';

    if(!empty($_SESSION["carro"])){

        foreach ($_SESSION["carro"] as $i=>$c){     //atribui a posição no indice na variável i
            echo "
                    <p>Cor: <span style='color:".$c->get_cor()."'>".$c->get_cor()."</span></p>
                    <p>Quantidade Portas: ".$c->get_qtd_porta()."</p>
                    <p>Velocidade Máxima: ".$c->get_velocidade_max()."</p>
                    <p>Velocidade Atual: ".$c->get_velocidade_atual()."</p>
                    <form method='post' action='acelerar_frear.php'><br />
                        <input type='number' name='tempo' placeholder='Tempo de aceleração / frenagem' min='1' />
                        <input type='number' name='acelarar_frear' placeholder='Velocidade da aceleração / frenagem' min='1' />
                        <input type='radio' name'tipo' class='radio' value='a' />
                        Aceleração
                        <input type='radio' class='radio' name='tipo' value='f' />
                        Frenagem
                        <br /><input type='hidden' name='id' value='$i' />
                        <input type='submit' value='Acelerar / Frear' />
                    </form><hr />";
        }
    }else{
        echo "<p>Nenhum objeto criado!</p>";
    }
?>
</body>
</html>