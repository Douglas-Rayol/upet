<?php
    require_once "../util/config.php";

    $nome = "Marcos";
    $telefone = "(91)99884512";
    $endereco = "Rua joaquim tavora, 234";
    $senha = "123456";
    $email = "marcos.tavora@gmail.com";

    $sql = "INSERT INTO contato (nome, telefone, endereco, senha, email) VALUES(?, ?, ?, ?, ?)";
    
    $stmt = mysqli_prepare($link, $sql);
    
    mysqli_stmt_bind_param($stmt, "sssss", $nome, $telefone, $endereco, $senha, $email);

    if(mysqli_stmt_execute($stmt)){
        echo " pronto pra outro";
    }else{
        echo " ta tudo errado";
    }

?>