<!DOCTYPE HTML>
<html>
<body>
    <?php
    include('conecta_banco.php');

    $id = $_GET['id_jogos'];
    $nome = $_GET['nome_jogo'];
    $quant = $_GET['quant_jogo'];
    $valor = $_GET['valor_jogo'];
	

    ?>

    <h1> Atualizar jogos </h1>
    <form action="atualizar.php" method="post">
                    <input type="hidden" name="id_jogos" value="<?php echo $id?>">
                    <b>Nome:</b> <input type="text" name="nome_jogo" value="<?php echo $nome?>">
                    <br> <br>
                    <b>Quantidade:</b> <input type="number" name="quant_jogo"  value="<?php echo $quant?>">
                    <br> <br>
                    <b>Valor:</b> <input type="number" step="any" name="valor_jogo"  value="<?php echo $valor?>">
                    <br> <br>
                    <input type="submit" value="Atualizar">
                </form>
                <br>
<body>

</html>