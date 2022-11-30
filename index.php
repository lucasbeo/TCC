<html>
    <title> cadastro </title>
    <body>
        <form name="cadastro" action="recebe.php" method="post">     
                
        nome:
            <input type="text" name="nome" required>
        
        data de nascimento: 
            <input type="date" name="data_nasc" required><br><br>

        CPF:
            <input type="text" name="cpf" required>
            
        Endereco:
            <input type="text" name="endereco" required><br><br>
        
        telefone: 
            <input type="text" name="tel" required>
        
        email: 
            <input type="email" name="email" required><br><br>
        
        usuário:
            <input type="text" name="usu" required>

        senha:
            <input type="password" name="senha" required> <br><br>

        
            <input name="enviar" type="submit" value="cadastrar">
            <input name="cancelar" type="reset" value="limpar dados">
        
        
        </form>

    </body>

</html>