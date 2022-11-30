<?php
 if(!isset($_SESSION)){
     session_start();
 }
 ?>
<html>

    <h3> Login: </h3> 
    <form action="validarusu.php" method="POST"> 
        usuario: 
        <input type="text" name="campo_usu" placeholder="Nome de usuário" required><br><br> 
        Senha:
        <input type="password" name="campo_senha" placeholder="Senha" required><br><br>
        
        <input type="submit" name="enviar" value="entrar"> 
        <input type="reset" name="cancelar" value="limpar">
        <?php
        if(isset($_SESSION["invalido"])){
            echo ("<h2> Senha/Usuário inválido <h2>");
        }
            unset($_SESSION["invalido"]);
        ?>



    </form>

</html>