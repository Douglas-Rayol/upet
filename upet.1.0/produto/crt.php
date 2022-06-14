<?php
    require_once "../util/config.php";
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = $_POST["nome"];
        $valor = $_POST["valor"];
        $detalhe = $_POST["detalhe"];
        $validade = $_POST["validade"];
        $marca = $_POST["marca"];

        $sql = "INSERT INTO produto (nome, valor, detalhe, validade, marca) VALUES(?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($link, $sql);
        
        mysqli_stmt_bind_param($stmt, "sisis", $nome, $valor, $detalhe, $validade, $marca);

        if(mysqli_stmt_execute($stmt)){
            echo " Registro concluido";
        }else{
            echo " Erro no Registro";
        }
    
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h2>Cadastro de Produto</h2>
    <form method="post" action="create.php">
        <p>Nome:<input type="text" name="nome"></p>
        <p>Valor:<input type="text" name="valor"></p>
        <p>Detalhe:<input type="text" name="detalhe"></p>
        <p>Validade:<input type="text" name="validade"></p>
        <p>Marca:<input type="text" name="marca"></p>
        <p><input type="submit" value="Salvar"></p>
    </form>
    <p><a href='index.php'>Voltar</a></p>
</body>
</html>