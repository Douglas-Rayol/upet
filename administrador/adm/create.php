<?php
    require_once "../util/config.php";
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco"];

        $sql = "INSERT INTO administrador (nome, telefone, endereco) VALUES(?, ?, ?)";
        
        $stmt = mysqli_prepare($link, $sql);
        
        mysqli_stmt_bind_param($stmt, "sss", $nome, $telefone, $endereco);

        if(mysqli_stmt_execute($stmt)){
            echo " pronto pra outro";
        }else{
            echo " ta tudo errado";
        }
    
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Administrador</title>
</head>
<body>
    <h2>Cadastro de Administrador</h2>
    <form method="post" action="create.php">
        <p>Nome:<input type="text" name="nome"></p>
        <p>Telefone:<input type="text" name="telefone"></p>
        <p>Endereco:<input type="text" name="endereco"></p>
        <p><input type="submit" value="Salvar"></p>
    </form>
    <p><a href='index.php'>Voltar</a></p>
</body>
</html>