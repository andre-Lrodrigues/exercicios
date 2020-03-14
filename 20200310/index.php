<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cadastro de Animais</title>
        <style>
            fieldset{
                padding: 1em;
                margin: 12px 720px;
            }
            h2{
                text-align: center;
            }
            input[type=text], input[type=number], input[type=submit], input[type=reset], input[type=button]{
                padding: 1em;
                margin: 5px;
            }
            input[type=submit], input[type=reset], input[type=button]:hover {
	            cursor: pointer;
            }
        </style>
    </head>
    <body>
        <a href="index.php">Início</a> | 
        <a href="exibeAnimal.php">Exibir animais</a> | 
        <a href="limpar.php">Limpar registros</a><hr />
        <br /><h2>Catalogação</h2>
        <?php
            include "form_animal.php";
        ?>
    </body>
</html>