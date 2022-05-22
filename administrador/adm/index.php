<?php
    require_once "../util/config.php";

    $sql = "SELECT * FROM administrador ORDER BY nome";
    $result = mysqli_query($link, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Administrador</title>
</head>
<body>
    <h2>Lista de Administrador</h2>
    <p><a href="create.php">Incluir</a></p>
    <table border="1">
        <tr>
            <!--<td>Id</td>-->
            <td><center>Nome</center></td>
            <td><center>Telefone</center></td>
            <td><center>Endereço</center></td>
            <td colspan="3"><center>Ações</center></td>
        </tr>
        <?php while($row = mysqli_fetch_array($result)){?>
        <tr>
            <!--<td><?php //echo($row['idfuncionario'])?></td>-->
            <td><?php echo($row['nome'])?></td>
            <td><?php echo($row['telefone'])?></td>
            <td><?php echo($row['endereco'])?></td>
            <td><?php echo('<a href="read.php?id='.$row['idadministrador'].'">Exibir</a>')?></td>
            <td><?php echo('<a href="update.php?id='.$row['idadministrador'].'">Alterar</a>')?></td>
            <td><?php echo('<a href="delete.php?id='.$row['idadministrador'].'">Excluir</a>')?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>