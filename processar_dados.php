<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $dbHost =  'sql10.freesqldatabase.com';
    $dbUsername = 'sql10657416';
    $dbPassword = 'pxybUc2wt8';
    $dbName = 'sql10657416';


    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $result = mysqli_query($conexao, "INSERT INTO usuarios(email,senha) VALUES ('$email','$senha')");
    header('location: index.html');
}
?>