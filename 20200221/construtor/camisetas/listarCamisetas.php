        <?php
            include "cabecalho.php";
            echo '<h2>Camisetas instanciadas no sistema:</h2>';

            if(!empty($_SESSION["camiseta"])){

                foreach ($_SESSION["camiseta"] as $c){
                    echo "
                            <p>Cor: <span style='color:$c->cor'>$c->cor</span></p>
                            <p>Tamanho: $c->tamanho</p>
                            <p>Quantidade: $c->qtd</p>
                            <hr />";
                }
            }
            else{
                echo '<h3>Nenhuma camiseta criada!</h3>';
            }
        ?>
    </body>
</html>