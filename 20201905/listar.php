<?php
    include "classeLivro.php";
    include "classeFilme.php";
    include "cabecalho.php";
    session_start();

    if(!empty($_SESSION["produto"])){

        echo '<p><b>Lista de produtos</b></p>';
        foreach($_SESSION["produto"] as $p){
        print_r(get_class($p));
            $p->exibe();
        }
    }
    else{
        echo '<p>Nenhum produto cadastrado ainda</p>';
    }
?>
        </section>
    </body>
</html>