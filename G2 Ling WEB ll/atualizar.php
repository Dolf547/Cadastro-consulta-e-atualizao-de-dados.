<?php
    include('conecta_banco.php');
	session_start();

    $id = $_POST['id_jogos'];
	$nome = $_POST['nome_jogo'];
	$quant = $_POST['quant_jogo'];
	$valor = $_POST['valor_jogo'];

	$conexao = conectabanco();
    
	$sql = "UPDATE estoque_jogos SET nome_jogo='$nome', quant_jogo=$quant, valor_jogo=$valor WHERE id_jogos = $id";
    $res = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    
	$_SESSION['msg_sucesso'] = "Atualizado com sucesso!";
	header("location: consulta_jogo.php");
    ?>
