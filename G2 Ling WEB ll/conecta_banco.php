<?php
    //1#
    function conectabanco()
    {
        $conexao = mysqli_connect("localhost","root","","loja_jogos");
        if($conexao){
            echo "<p> Conectado com sucesso! </p>";
                    }
        else{
            echo "<p> Erro ao se conectar! </p>";
            echo "<p>".mysqli_connect_error($conexao);
            }
        return $conexao; 
    }  
 //2#
    function desconectabanco($conexao){
        mysqli_close($conexao);
    }
 //3#
    function inserir($nomes, $conexao){
        $sql = "INSERT INTO estoque_jogos (nome_jogo, quant_jogo, valor_jogo) VALUES ('$nomes[0]', $nomes[1], $nomes[2])";

        $res = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    
        if($res == 1){
            echo "<p> Jogo $nomes[0] cadastrado com sucesso! </p>";
        }
    
    }    

 //4#
 function filtertable($query){
    $connect = mysqli_connect("localhost","root","","loja_jogos");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

 //5#


 
?>