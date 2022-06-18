<?php

    session_start();

    if($_SESSION['login'] == false){
        header("Location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\regrasdeuso.css">
    <script src="https://kit.fontawesome.com/e785a5ab3e.js" crossorigin="anonymous"></script>
    <title>Regras - LabRes</title>
    <link rel="icon" type="imagem/png" href="img\iconeLogo.png">
</head>
<body>
<header class="header">
        <img id="logoheader" src="img\iflogoalterar.JPG" alt="">
        <h1>Sistema Interno de Reserva de Laboratórios</h1>
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
    <div class="regras">
        <h1>Regras de uso dos laboratórios de informática</h1>
            <div class="listaregras">
                <p>
                &nbsp;&nbsp;&nbsp; A estrutura física dos Laboratórios de Informática é composta por salas devidamente equipadas
                com microcomputadores interligados em rede e com acesso à internet, projetor multimídia, tela de projeção retrátil e ar-condicionado.
                <br>
                &nbsp;&nbsp;&nbsp; Os laboratórios de Informática são mantidos e monitorados pela Coordenação de Ensino e pelo Técnico de Laboratório Área Informática, 
                que supervisiona e, conta com o apoio dos estagiários da área de Ensino/informática nas atividades de monitoramento e manutenções preventivas e corretivas para a conservação dos equipamentos.
                <br>
                &nbsp;&nbsp;&nbsp; O horário de funcionamento está disponível para consulta no quadro de horários, fixado nas portas de entrada de cada um dos Laboratórios de Informática.
                <br>
                &nbsp;&nbsp;&nbsp; Nos horários vagos (que nõ tenham aulas ou manutenções) podem ser utilizados pela comunidade acadêmica (discentes), com a assistência do laboratorista, do professor ou 
                do estagiário.

                </p>
                
                <ol> <br> <br>
                    <li> Quanto a utilização dos laboratórios em geral:
                        <br>1.1 &nbsp;&nbsp;&nbsp;A utilização de qualquer equipamento do laboratório, só é permitida para discentes e docentes do Instituto Federal do Sul de Minas Gerais - campus Passos.
                        <br>1.2 &nbsp;&nbsp;&nbsp;Quando retirar algo do lugar, ao término do uso deve-se colocar no exato local em que o objeto se encontrava antes do uso.
                        <br>1.3 &nbsp;&nbsp;&nbsp;É terminantemente proibido o consumo de alimentos dentro do laboratório.
                        <br>1.4 &nbsp;&nbsp;&nbsp;Em caso de dúvida, não mexa, force, empurre ou se arrisque. Na dúvida procure o professor ou o monitor.
                        <br>1.5 &nbsp;&nbsp;&nbsp;É probida a retirada de qualquer documento, equipamento ou peça sem autorização.
                        <br>1.6 &nbsp;&nbsp;&nbsp;Durante as aulas, e de responsabilidade do docente orientar os trabalhos e zelar pela disciplina, e correta utilização, dos microcomputadores e periféricos, tela de projeção retrátil, projetor, ar-condicionado e os respectivos controles remotos.
                        <br>1.7 &nbsp;&nbsp;&nbsp;É proibido o acesso a sites pornográficos, sites de relacionamentos, torpedos e jogos.
                        <br>1.8 &nbsp;&nbsp;&nbsp;A liberação pra acesso a sites, downloads e demais conteúdos bloqueados, que porventura sejam pertinentes a quaisquer disciplinas deve ser solicitada por seu respectivo docente ao Técnico de Laboratório Área Informática.
                        <br>1.9 &nbsp;&nbsp;&nbsp;Por questões legais referentes a direitos autorais, não é permitida a gravação, reprodução ou a utilização de quaisquer programas sem a autorização ou permissão, por escrio, do responsável pelos Laboratórios de Informática.
                        <br>1.10 &nbsp;&nbsp;&nbsp;Estas normas abrangem igualmente profissionais e estudantes envolvidos nos programas PRONATEC, FIC e EAD.
                    </li>
                    <br>
                    <li>Quanto ao agendamento de horários dos laboratórios:
                        <br>2.1 &nbsp;&nbsp;&nbsp;O agendamento deverá ser realizado utilizando o sistema de agendamento interno do Instituto Federal do Sul de Minas Gerais - campus Passos.
                        <br>2.2 &nbsp;&nbsp;&nbsp;O agendamento somente poderá ser feito mediante login com identidade de aluno ou professor.
                        <br>2.3 &nbsp;&nbsp;&nbsp;Não serão aceitos agendamentos fora do horário de funcionamento do campus.
                        <br>2.4 &nbsp;&nbsp;&nbsp;Outros casos deverão ser consultados na coordenação do campus.                        
                    </li>
                </ol>
            </div>
    </div>
</body>
<body>
    <footer>  <!--        FOOTER            -->
        <div class="logofooter">
            <img src="img\logoif.png" alt="">
        </div>
        <div class="left">
            <span class="fas fa-map-marker"></a></span>
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
</body>
</html>