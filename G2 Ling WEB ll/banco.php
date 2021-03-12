<?php
    include('conecta_banco.php');
    $nomes = $_POST["nomes"];

    $con = conectabanco();

    inserir($nomes, $con);
    desconectabanco($con);

?>