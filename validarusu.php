<?php
if (!isset($_SESSION)){
    session_start();
}
include("conexao.php");
$campo_senha = $_POST["campo_senha"];
    $campo_usu = $_POST["campo_usu"];
    if ($campo_usu != "") {
    $campo_usu = $_POST["campo_usu"];
    $sql = "SELECT * FROM cliente where usuario= '$campo_usu' 
    and senha= md5('$campo_senha') ";
    $result = $mysqli->query($sql);
    $row = mysqli_num_rows($result);
    $result->close();
    $mysqli->close();

    if ($row == 0) {
        $_SESSION['invalido'] = true;
        header("Location:login.php");
    } else {
        
        header("Refresh: 0; url=teste.html");
    }
}
?>