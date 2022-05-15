<?php
    require_once "../util/config.php";

    if($_GET['id']){
        $id = $_GET['id'];
        $sql = "SELECT * FROM usuario WHERE idusuario = ?";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_array($result);
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhe do Usuario</title>
</head>
<body>
    <h2>Detalhes do Usuario</h2>
    <p>Nome: <?php echo($row['nome']) ?></p>
    <p>Telefone: <?php echo($row['telefone']) ?></p>
    <p>Endereço: <?php echo($row['endereco']) ?></p>
    <p>Senha: <?php echo($row['senha']) ?></p>
    <p>Email: <?php echo($row['email']) ?></p>
    <p><a href='index.php'>Voltar</a></p>
</body>
</html>