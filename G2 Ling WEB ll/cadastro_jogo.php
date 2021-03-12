<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Jogos!</title>
    </head>
        <body>
            <form action="banco.php" method="post">
                <b>Nome:</b> <input type="text" name="nomes[]">
                <br> <br>
                <b>Quantidade:</b> <input type="number" name="nomes[]">
                <br> <br>
                <b>Valor:</b> <input type="number" step="any" name="nomes[]">
                <br> <br>
                <input type="submit" value="Cadastrar">
            </form>
            <br>
        <nav> 
            <li> <a href="index.php"> Voltar para Index </a></li>
        </nav>
     </body>
</html>