<?php
    include "cabecalho.php"
?>
            <p>Bem Vindo ao sistema de cadastro</p>
            <form method="post" action="form_cadastro.php">
                <select name="produto" required>
                    <option hidden value="">::Escolha o Produto::</option>
                    <option value="Livro">Livro</option>
                    <option value="Filme">Filme</option>
                </select>
                <input type="submit" value="Avançar" />
            </form>
        </section>
    </body>
</html>