<?php

    session_start();

    if($_SESSION['login'] == false){
        header("Location:../index.php");
    }

?>

<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reclame aqui</title>
        <link rel="icon" type="imagem/png" href="img\iconeLogo.png">
        <script src="https://kit.fontawesome.com/e785a5ab3e.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="CSS\agenda.css">
        <link rel="stylesheet" href="CSS\stylecadastro.css">
        <link rel="stylesheet" href="CSS\stylereclame.css">        
    </head>
    <body>
        <header class="header">
            <img id="logoheader" src="img\iflogoalterar.JPG" alt="">
            <h1>Sistema Interno de Reservas de Laboratórios</h1>
        </header>
        <nav>  <!--     NAV MENU      -->
            <ul>
                <li><a href="agenda.php" target="_blank" rel="noopener">Home</a>
                    <div class="submenu1">
                        <ul>
                            <li><a href="agenda.php" target="_blank" rel="noopener">Agenda</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#" target="_blank" rel="noopener">Laboratórios</a>
                    <div class="submenu1">
                        <ul>
                            <li><a href="regrasdeuso.php" target="_blank" rel="noopener">Regras de uso</a></li>
                            <li><a href="mapa.php" target="_blank" rel="noopener">Mapa do prédio</a></li>
                            <li><a href="arquitetura.php" target="_blank" rel="noopener">Arquitetura das máquinas</a></li>
                        </ul>
                    </div>
                </li> 
                <li><a href="consulta.php" target="_blank" rel="noopener">Consulta</a>
                    <div class="submenu1">
                        <ul>
                            <li><a href="listaReclamacoes.php">Reclamações</a></li>
                            <li><a href="consulta.php">Disponibilidade</a></li>
                        </ul>
                    </li>
                    </div>
                </li>
                <li><a href="reclameaqui.php" target="_blank" rel="noopener">Reclame aqui</a>
                    <li><a href="index.php">Sair</a></li>
            </ul>
    </nav>
        <div id="container">
            <div id="principal">
                <h2 id="titulo">Reclame Aqui!</h2>
                <div id="alinharMensagemSucesso">
                    <div id="mensagemSucesso">Reclamação realizada com sucesso!</div>
                </div>
                <div id="divOpcaoAnonimo">
                    <input id="checkboxAnonimo" type="checkbox">
                    <label for="checkboxAnonimo">Anônimo</label>
                </div>
                <div id="naoAnonimo">
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
                    <div class="radio">
                        <input type="radio" id="professor" name="categoria">
                        <label class="personalizaRadio" for="professor">Professor</label>
                        <input type="radio" id="aluno" name="categoria">
                        <label class="personalizaRadio" for="aluno">Aluno</label>
                        <input type="radio" id="servidor" name="categoria">
                        <label class="personalizaRadio" for="servidor">Servidor</label>
                    </div>
                    <div id="mensagemErroRadio"></div>
                </div>
                <div class="disposicaoLateral">
                    <div id="select">
                        <select id="selectLab">
                            <option value="" disabled selected hidden>Selecione o Lab</option>
                            <option id="lab1" value="1">Lab 1</option>
                            <option id="lab2" value="2">Lab 2</option>
                            <option id="lab3" value="3">Lab 3</option>
                            <option id="lab4" value="4">Lab 4</option>
                            <option id="lab5" value="5">Lab 5</option>
                            <option id="lab6" value="6">Lab 6</option>
                            <option id="lab7" value="7">Lab 7</option>
                            <option id="lab8" value="8">Lab 8</option>
                            <option id="lab9" value="9">Lab 9</option>
                            <option id="labRedes" value="Redes">Lab Redes</option>
                        </select>
                    </div>
                    <div id="campoData">
                        <label for="data">Data: </label>
                        <div id="campoDataAnimacao">
                            <input id="data" type="date" value="" required>
                            <div id="animacao"></div>
                        </div>
                    </div>
                </div>
                <div class="disposicaoLateralInput">
                    <div id="mensagemErroValidaLab"></div>
                    <div id="mensagemErroValidaData"></div>
                </div>
                <div class="campoForm">
                    <textarea id="textareaDescricao" required></textarea>
                    <label id="textareaLabel" for="textareaDescricao">
                        <span>Descrição</span>
                    </label>
                </div>
                <div id="mensagemErroValidaDescricao"></div>
                <div id="botoesReclameAqui">
                    <button type="button" id="btnEnviar">Enviar</button>
                    <button type="button" id="btnLimpar">Limpar</button>
                </div>
            </div>

            
        </div>
        <script src="JS\reclamar.js"></script>
    </body>
    <footer>  <!--        FOOTER            -->
        <div class="logofooter">
            <img src="img\logoif.png" alt="">
        </div>
        <div class="left">
            <i class="fa-solid fa-location-pin"></i>
            <a href="https://www.google.com.br/maps/place/IFSULDEMINAS+-+Campus+Passos/@-20.7149958,-46.6278945,20.75z/data=!4m5!3m4!1s0x94b6c3a6a935b78b:0x10fd8020560ab6da!8m2!3d-20.7149735!4d-46.627846" target="_blank" rel="noopener">R. da Penha, 290 - Penha II, Passos - MG. <br> &nbsp;&nbsp;&nbsp; CEP: 37903-070</a> 
        </div>
        <div class="middle">
            <span class="fas fas fa-phone-alt"></span>
            Telefone: (35) 3526-4856
        </div>
        <div class="right">
            <span class="fas fa-envelope"></span>
            E-mail: gabinete.passos@ifsuldeminas.edu.br
        </div>
    </footer>
    <div class="direitos">
        <span class="far fa-copyright"></span> 2022 Instituto Federal de Ciência e Tecnologia do Sul de Minas Gerais - Todos os direitos reservados.
    </div>   <!--       FIM FOOTER            -->
    
</html>