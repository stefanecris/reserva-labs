<?php

    session_start();

    if($_SESSION['login'] == false){
        header("Location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\consulta.css">
    <script src="https://kit.fontawesome.com/e785a5ab3e.js" crossorigin="anonymous"></script>
    <title>Consulta - LabRes</title>
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
</body>
    <body>
        <div class="agenda">
            <iframe src="https://calendar.google.com/calendar/embed?height=700&wkst=1&bgcolor=%2333a047&ctz=America%2FSao_Paulo&showNav=1&showDate=1&showPrint=0&showTabs=0&showCalendars=0&showTz=0&mode=WEEK&src=aWZzdWxkZW1pbmFzcmVzZXJ2YWxhYnNAZ21haWwuY29t&color=%23039BE5" style="border-width:0" width="100%" height="700" frameborder="0" scrolling="no"></iframe>
        </div>
        <footer>
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
        </div>
    </body>
    
</html>