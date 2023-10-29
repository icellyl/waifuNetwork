<?php
use LDAP\Result;

    if(isset( $_POST['submit'] ))
    {
        // print_r($_POST['email']);
        // print_r('<br>');
        // print_r($_POST['senha']);
        // print_r('<br>');
        // print_r($_POST['senha2']);

        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        // print_r($email);
        // print_r($senha);
        $result = mysqli_query($conexao, "INSERT INTO usuarios(email,senha) VALUES ('$email','$senha')");
    }
?>


<!DOCTYPE php>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="waifuNetwork.css">
    <script src="waifuNetwork.js"></script>
    <title>Document</title>
</head>

<body>
    <header class="header">
    </header>
    <img src="imagens/paisana3.png" alt="" class="img" id="img">
    <div class="container1">
        <form action="index.php" class="formulario" method="POST">
            <fieldset>
                <legend class="legend">Sing in</legend>
                <div class="inputBox">
                    <input type="text" class="email input" id="email" name="email" required>
                    <label for="email" class="inputLabel">Email</label>
                </div>
                <div class="inputBox">
                    <input type="password" class="senha input" id="senha" name="senha" required>
                    <label for="senha" class="inputLabel">Senha</label>
                </div>
                <div class="inputBox">
                    <input type="password" class="senha input" id="senha2" name="senha2" required>
                    <label for="senha" class="inputLabel">Confirma senha</label>
                </div>
                <input type="submit" name="submit" class="submit" id="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>

</body>

</html>