<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GereCurso</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

    <body>
        <?php
        include_once './topo.php';
        ?>
        <div class="titulo_opcoes">
            <font color="black">Remove Despesas
        </div>
        <form action="excluiDespesa.php" method="POST">
            
            <p align="center"> Identificação (ID) da Despesa: <input type="text" name="id_despesa">
            
            <input type="submit" value="Remover Despesa"></p>
        </form>
        <?php
        include_once './rodape.php';
        ?>
    </body>
</html>



