<?php

include('protect.php');
require('conexao.php');

$id=$_SESSION['id'];


$consult_nome = "SELECT nome from adm inner join login_adm on fk_login = id_login
WHERE id_adm = '$id'";
$result_nome = mysqli_query($mysqli,$consult_nome);
$nome = mysqli_fetch_assoc($result_nome);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>

    Bem vindo ao Painel  
    <?php
    echo $nome['nome'];
    ?>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>