<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Produto</title>
    <link rel="stylesheet" href="../css/cadas-pro.css">
</head>
<body>
    <div class="form">
        <form method="post" action="index.php"><br>
            <h1> Cadastro de Produto</h1><br><br>
            <input type="text" size="40" placeholder=" Código do Produto"> &nbsp; &nbsp;
            <input type="text" placeholder=" R$"><br><br>
            <input type="text" size="40" placeholder=" Descriçao do Produto"> &nbsp; &nbsp;
            <input type="date" placeholder=" Validade"><br><br>
            <label for="uf">Produtos:</label>
            <select name="racoes" id="uf">
                    <option value="0">Selecionar</option>
                    <option value="1">Premium</option>
                    <option value="2">Briquedos</option>
                    <option value="3">Roupa</option>
            </select><br><br><br>
            <input type="submit" value="Registrar"> &nbsp; &nbsp;
            <input type="submit" value="Atuaizar"> &nbsp; &nbsp;
            <input type="submit" value="Deletar"><br><br>
        </form>
    </div>
</body>
</html>