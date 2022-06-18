<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Criar sua Conta</title>
        <link rel="icon" type="imagem/png" href="iconeLogo.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="CSS\stylecadastro.css">
    </head>
    <body>
        <div id="container">
            <div id="principal">
                <img src="img\logoif.png" id="logoIf">
                <h2 id="titulo">Criar sua Conta</h2>
                <div id="alinharMensagemSucesso">
                    <div id="mensagemSucesso">Cadastro realizado com sucesso! <a href="index.php">Faça login</a> </div>
                </div>
                <div class="disposicaoLateralInput">
                    <div class="campoForm" id="campoNome">
                        <input class="inputAnimacao" id="inputNome" type="text" name="inputNome" autocomplete="off" required>
                        <label class="labelAnimacao" id="labelNome" for="inputNome">
                            <span>Nome</span>
                        </label>
                    </div>
                    <div class="campoForm" id="campoId">
                        <input class="inputAnimacao" id="inputId" type="text" name="inputId" autocomplete="off" required>
                        <label class="labelAnimacao" id="labelId" for="inputId">
                            <span>RA/SIAPE/CPF</span>
                        </label>
                    </div>
                </div>
                <div class="disposicaoLateralInput">
                    <div id="mensagemErroValidaNome"></div>
                    <div id="mensagemErroValidaId"></div>
                </div>
                
                <div class="campoForm">
                    <input class="inputAnimacao" id="inputEmail" type="text" name="inputEmail" autocomplete="off" required>
                    <label class="labelAnimacao" id="labelEmail" for="inputEmail">
                        <span>E-mail</span>
                    </label>
                </div>
                <div id="mensagemErroValidaEmail"></div>
                <div class="disposicaoLateralInput">
                    <div class="campoForm" id="campoSenha">
                        <input class="inputAnimacao" id="inputSenha" type="password" name="inputSenha" autocomplete="off" required>
                        <label class="labelAnimacao" id="labelSenha" for="inputSenha">
                            <span>Senha</span>
                        </label>
                        <i id="fa-eye-senha" class="fa fa-eye" aria-hidden="true"></i>
                        <i id="fa-eye-slash-senha" class="fa fa-eye-slash" aria-hidden="true"></i>
                    </div>
                    <div class="campoForm" id="campoConfirmarSenha">
                        <input class="inputAnimacao" id="inputConfirmarSenha" type="password" name="inputConfirmarSenha" autocomplete="off" required>
                        <label class="labelAnimacao" id="labelConfirmarSenha" for="inputConfirmarSenha">
                            <span>Confirmar senha</span>
                        </label>
                        <i id="fa-eye-confirmarSenha" class="fa fa-eye" aria-hidden="true"></i>
                        <i id="fa-eye-slash-confirmarSenha" class="fa fa-eye-slash" aria-hidden="true"></i>
                    </div>
                </div>
                <div id="mensagemErroValidaSenha"></div>
                <div class="radio">
                    <input type="radio" id="professor" name="categoria">
                    <label class="personalizaRadio" for="professor">Professor</label>
                    <input type="radio" id="aluno" name="categoria">
                    <label class="personalizaRadio" for="aluno">Aluno</label>
                    <input type="radio" id="servidor" name="categoria">
                    <label class="personalizaRadio" for="servidor">Servidor</label>
                </div>
                <div id="mensagemErroRadio"></div>
                <div id="camposProfessor">
                    <div class="campoForm" id="campoAreaAtuacao">
                        <input class="inputAnimacao" id="inputAreaAtuacao" type="text" name="inputAreaAtuacao" autocomplete="off" required>
                        <label class="labelAnimacao" id="labelAreaAtuacao" for="inputAreaAtuacao">
                            <span>Área de atuação</span>
                        </label>
                    </div>
                    <div id="mensagemErroValidaAreaAtuacao"></div>
                </div>
                
                <div id="camposAluno">
                    <div class="disposicaoLateralInput">
                        <div class="campoForm" id="campoCurso">
                            <input class="inputAnimacao" id="inputCurso" type="text" name="inputCurso" autocomplete="off" required>
                            <label class="labelAnimacao" id="labelCurso" for="inputCurso">
                                <span>Curso</span>
                            </label>
                        </div>
                        <div class="campoForm" id="campoPeriodo">
                            <input class="inputAnimacao" id="inputPeriodo" type="text" name="inputPeriodo" autocomplete="off" required>
                            <label class="labelAnimacao" id="labelPeriodo" for="inputPeriodo">
                                <span>Período</span>
                            </label>
                        </div>
                    </div>
                    <div class="disposicaoLateralInput">
                        <div id="mensagemErroValidaCurso"></div>
                        <div id="mensagemErroValidaPeriodo"></div>
                    </div>
                </div>
                
                <div id="camposServidor">
                    <div class="campoForm" id="campoDepartamento">
                        <input class="inputAnimacao" id="inputDepartamento" type="text" name="inputDepartamento" autocomplete="off" required>
                        <label class="labelAnimacao" id="labelDepartamento" for="inputDepartamento">
                            <span>Departamento</span>
                        </label>
                    </div>
                    <div id="mensagemErroValidaDepartamento"></div>
                </div>
                
                <div id="botoes">
                    <button type="button" id="btnCadastrar">Cadastrar</button>
                    <button type="button" id="btnLimpar">Limpar</button>
                </div>
                
            </div>
        </div>
        <script type="text/javascript" src="JS\cadastroUsuario.js"></script>
    </body>
</html>