<?php 
        require_once "../util/config.php";
        if($_GET['id']){
            $id = $_GET['id'];
            $sql = "SELECT * FROM produto WHERE idproduto = ?";
            $stmt = mysqli_prepare($link, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_array($result);
        }
        if($_SERVER['REQUEST_METHOD'] == "POST"){        
            $nome = $_POST["nome"];
            $valor = $_POST["valor"];
            $detalhe = $_POST["detalhe"];
            $validade = $_POST["validade"];
            $marca = $_POST["marca"];
            $id = $_POST["id"];
            $sql = "UPDATE usuario SET nome = ?, valor = ?, detalhe = ?  validade = ? marca = ? WHERE idproduto = ?";
            $stmt = mysqli_prepare($link, $sql);
            mysqli_stmt_bind_param($stmt, "sssis", $nome, $valor, $detalhe, $validade, $marca);
            if(mysqli_stmt_execute($stmt)){
                header('location: index.php');
                exit;
            } else {
                echo "Ocorreu um erro";
            }
        }
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar Usuario</title>
    </head>
    <body>
    <h2>Alteração de Usuario</h2>
    <form method="post" action="update.php">
        <p>Nome:<input type="text" name="nome" value="<?php echo $row['nome'] ?>"></p>
        <p>Valor:<input type="text" name="valor" value="<?php echo $row['valor'] ?>"></p>
        <p>Detalhe:<input type="text" name="detalhe" value="<?php echo $row['detalhe'] ?>"></p>
        <p>Validade:<input type="text" name="validade" value="<?php echo $row['validade'] ?>"></p>
        <p>Marca:<input type="text" name="marca" value="<?php echo $row['marca'] ?>"></p>
        <input type="hidden" name="id" value="<?php echo $row['idproduto'] ?>">
        <p><input type="submit" value="Alterar"></p>
    </form>
    <p><a href='index.php'>Voltar</a></p>
    </body>
    </html>