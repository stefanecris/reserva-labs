<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Esqueci a senha</title>
        <link rel="icon" type="imagem/png" href="img\iconeLogo.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS\stylecadastro.css">
        <link rel="stylesheet" href="CSS\styleredefinicaosenha.css">
    </head>
    <body>
        <div id="container">
            <div id="principal">
                <img src="img\logoif.png" id="logoIf">
                <h2>Redefina sua senha</h2>
                <div id="alinharMensagemSucesso">
                    <div id="mensagemSucesso">Senha alterada com sucesso!</div>
                </div>
                <div class="campoForm" id="campoId">
                    <input class="inputAnimacao" id="inputId" type="text" name="inputId" autocomplete="off" required>
                    <label class="labelAnimacao" id="labelId" for="inputId">
                        <span>RA/SIAPE/CPF</span>
                    </label>
                </div>
                <div id="mensagemErroValidaId"></div>
                <div class="campoForm" id="campoSenha">
                    <input class="inputAnimacao" id="inputSenha" type="password" name="inputSenha" autocomplete="off" required>
                    <label class="labelAnimacao" id="labelSenha" for="inputSenha">
                        <span>Nova senha</span>
                    </label>
                    <i id="fa-eye-senha" class="fa fa-eye" aria-hidden="true"></i>
                    <i id="fa-eye-slash-senha" class="fa fa-eye-slash" aria-hidden="true"></i>
                </div>
                <div id="mensagemErroValidaSenha"></div>
                <div class="campoForm" id="campoConfirmarSenha">
                    <input class="inputAnimacao" id="inputConfirmarSenha" type="password" name="inputConfirmarSenha" autocomplete="off" required>
                    <label class="labelAnimacao" id="labelConfirmarSenha" for="inputConfirmarSenha">
                        <span>Confirmar senha</span>
                    </label>
                    <i id="fa-eye-confirmarSenha" class="fa fa-eye" aria-hidden="true"></i>
                    <i id="fa-eye-slash-confirmarSenha" class="fa fa-eye-slash" aria-hidden="true"></i>
                </div>
                <a href="index.php">Login</a>
                <div id="botoes">
                    <button type="button" id="btnAlterarSenha">Alterar Senha</button>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="JS\redefinirSenha.js"></script>
    </body>
</html>