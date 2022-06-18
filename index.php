<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LabRes</title>
    <link rel="icon" type="imagem/png" href="img/iconeLogo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylecadastro.css">
    <link rel="stylesheet" href="css/styleredefinicaosenha.css">
    <link rel="stylesheet" href="css/styleindex.css">
</head>
<body>        
    <div class="wrapper">
        <div class="cardlogin">
            <img class="logo" src="img/logoif.png" alt="Logo do IF">
            <div class="login">
                <div id="alinharMensagemErroLogin">
                    <div id="mensagemErroLogin">Usuário ou senha inválido!</div>
                </div>
                <h2>RESERVA DE LABORATÓRIOS</h2>
                <div class="campoForm" id="campoId">
                    <input class="inputAnimacao" id="inputId" type="number" name="inputId" autocomplete="off" required>
                    <label class="labelAnimacao" id="labelId" for="inputId">
                        <span>RA/SIAPE/CPF</span>
                    </label>
                </div>
                <div id="mensagemErroValidaId"></div>
                <div class="campoForm" id="campoSenha">
                    <input class="inputAnimacao" id="inputSenha" type="password" name="inputSenha" autocomplete="off" required>
                    <label class="labelAnimacao" id="labelSenha" for="inputSenha">
                        <span>Senha</span>
                    </label>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                </div>
                <div id="mensagemErroValidaSenha"></div>
                <div id="botoesLogin">
                    <button type="button" id="btnLogin">Login</button><br>
                    <button type="button" id="btnCadastrar">Cadastre-se</button>
                </div>
            </div>
            <div>
                <a href="redefinirSenha.php">Esqueceu sua senha?</a>
            </div>
        </div>
    </div>
    <script src="JS\testelogin.js"></script>
</body>
</html>
