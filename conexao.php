<?php
    $mysqli = new mysqli("localhost:3307", "root", "", "restaurante");

    if(mysqli_connect_errno()){
        printf("Erro de Conexão: %s\n", mysqli_connect_error());
        exit();

    }

    ?>