<?php
    require_once "../util/config.php";

    $nome = "Marcos";
    $telefone = "(91)99884512";
    $endereco = "Rua joaquim tavora, 234";
    $senha = "123456";
    $email = "marcos.tavora@gmail.com";

    $sql = "INSERT INTO contato (nome, telefone, endereco) VALUES(?, ?, ?)";
    
    $stmt = mysqli_prepare($link, $sql);
    
    mysqli_stmt_bind_param($stmt, "sss", $nome, $telefone, $endereco);

    if(mysqli_stmt_execute($stmt)){
        echo " Pronto";
    }else{
        echo " Erro";
    }

?>