<<<<<<< HEAD
<?php
    include "classeInput.php";
    include "classeSelect.php";
    include "classeTextarea.php";
    include "cabecalho.php";

    $valor["name"] = "tipo";
    $valor["value1"] = "";
    $valor["value2"] = "Doce";
    $valor["value3"] = "Salgado";

    $s = new Select($valor);

    $valor["name"] = "ingredientes";
    $valor["rows"] = 3;
    $valor["cols"] = 30;
    $valor["placeholder"] = "Lista de ingredientes...";

    $t = new Textarea($valor);

    $valor["name"] = "preparo";
    $valor["rows"] = 3;
    $valor["cols"] = 30;
    $valor["placeholder"] = "Modo de Preparo...";

    $t = new Textarea($valor);

    $valor["type"] = "text";
    $valor["name"] = "nome";
    $valor["placeholder"] = "Nome da receita...";

    $i = new Input($valor);

    $valor["type"] = "submit";
    $valor["value"] = "Cadastrar";

    $s = new Input($valor);
?>
            </form>
        </section>
    </body>
=======
<?php
    include "classeInput.php";
    include "classeSelect.php";
    include "classeTextarea.php";
    include "cabecalho.php";

    $valor["name"] = "tipo";
    $valor["value1"] = "";
    $valor["value2"] = "Doce";
    $valor["value3"] = "Salgado";

    $s = new Select($valor);

    $valor["name"] = "ingredientes";
    $valor["rows"] = 3;
    $valor["cols"] = 30;
    $valor["placeholder"] = "Lista de ingredientes...";

    $t = new Textarea($valor);

    $valor["name"] = "preparo";
    $valor["rows"] = 3;
    $valor["cols"] = 30;
    $valor["placeholder"] = "Modo de Preparo...";

    $t = new Textarea($valor);

    $valor["type"] = "text";
    $valor["name"] = "nome";
    $valor["placeholder"] = "Nome da receita...";

    $i = new Input($valor);

    $valor["type"] = "submit";
    $valor["value"] = "Cadastrar";

    $s = new Input($valor);
?>
            </form>
        </section>
    </body>
>>>>>>> 5aa898bebdbbb20aef4ef24220014e5434e665f2
</html>