<?php

include('conecta_banco.php');

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM estoque_jogos where nome_jogo like '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM estoque_jogos";
    $search_result = filterTable($query);
}

filtertable($query);



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Consulta jogos</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="consulta_jogo.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Buscar..."><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
           <li> <a href="index.php"> Index - Menu </a> </li>
                 <br> 
            <table>
                <tr>
                    <th>Id_jogo</th>
                    <th>Nome jogo</th>
                    <th>Quantidade jogo</th>
                    <th>Valor jogo</th> 
                    
                
                </tr>

                <?php       
                if(mysqli_num_rows($search_result) > 0 )
                {
                    while($row = mysqli_fetch_array($search_result)){
                    ?>
                    <tr>
                        <td><?php echo $row['id_jogos'];?></td>
                        <td><?php echo $row['nome_jogo'];?></td>
                        <td><?php echo $row['quant_jogo'];?></td>
                        <td><?php echo $row['valor_jogo'];?> </td>
                        <td><a href="edita_jogo.php?nome_jogo=<?php echo $row['nome_jogo'].'&quant_jogo='.$row['quant_jogo'].'&valor_jogo='.$row['valor_jogo'].'&id_jogos='.$row['id_jogos']?>"> Editar </a> </td>
                    </tr>  
                    <?php }
                }
                  else {
                   echo "Não existe resultado";}
                    ?>   
					<?php 
						session_start();
						if (isset($_SESSION['msg_sucesso'])) {
							echo $_SESSION['msg_sucesso'];
							session_unset();
						}
                    ?>

            </table>
        </form>
        
    </body>
</html>