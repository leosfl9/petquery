<?php
    include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="icon" href="img/icons/logo.png" type="Image/png">
    <title>PetQuery - Login</title>
</head>
<body>

    <!-- navbar -->

    <nav id="nav" class="navbar navbar-expand-lg sticky-top" style="background-color: #518CD7;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/icons/logo.png" style="width: 15vh; height: 15vh; margin-bottom: -25px; margin-top: -25px;" alt="logo da petquery"></a>
            <span><img src="img/cadeado.png" alt="icone de cadeado" style="width: 5vh; float: left; margin-left: -35px; margin-top: -0px"><h5 style="font-weight: 600; color: #fff; margin-top: 5px">Ambiente seguro</h5></span>
        </div>
    </nav>

    <!-- login -->

    <div class="container-fluid mt-5">
        <div class="container" id="form_login" style="width: 35%">
            <div class="row justify-content-center">
                <img class="rounded-circle mt-5" src="img/icons/usuario.png" alt="icone de usuario" style="width: 80px;">
            </div>
            <div class="row justify-content-center text-center mt-4">
                <h6 style="font-weight: 600">Login</h6>
            </div>
            <div class="row justify-content-center text-center mt-2 mb-5">
                <small class="form-text">Informe seu e-mail e senha de cadastro</small>
            </div>
            <form method="POST" action="">
                <div class="mb-4">
                    <input type="text" minlength="1" maxlength="200" name = "email" placeholder="E-mail" class="form-control" id="emaillogin" style="border-color: #a9a9a9" required>
                </div>
                <div class="mb-4">
                    <input type="password" minlength="8" maxlength="50" name = "senha" placeholder="Senha" class="form-control" id="senhalogin" style="border-color: #a9a9a9;" required>
                    <a href="recuperar_senha.php" style="text-decoration: none"><div id="passwordHelp" class="form-text" style="text-align: right">Esqueci minha senha</div></a>
                </div>
                <div class="row justify-content-center text-center">
                    <button type="submit" class="btn mb-3" style="background-color: #518CD7; color: #fff; font-weight: 600; width: 96%">Entrar</button>
                    <span class="form-text">Ainda não tem conta? <a href="cadastro_cli.php" style="text-decoration: none">Cadastre-se</a></span>
                </div>
            </form>
        </div>
    </div>

    <?php

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM login_adm WHERE username = '$email' AND SENHa = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['ID_LOGIN'];
            

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

</body>
</html>