<?php
    include("conexao.php");
    $nome = $_POST["nome"];
    $data_nasc = $_POST["data_nasc"];
    $cpf = $_POST["cpf"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $usu = $_POST["usu"];
    $senha = $_POST["senha"];
    $endereco = $_POST["endereco"];
        
    $sql =" INSERT INTO cliente(nome, usuario, "
    . "senha, telefone, email, cpf, data_nasc, endereco)"
    . " VALUES( '$nome', '$usu', MD5('$senha'),
'$tel', '$email', '$cpf', '$data_nasc','$endereco')";

    $mysqli -> query($sql);
    header("location:index.php?link=1");
    ?>


