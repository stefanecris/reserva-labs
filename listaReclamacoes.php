<?php

    session_start();

    if($_SESSION['login'] == false){
        header("Location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="CSS\regrasdeuso.css">
    <link rel="stylesheet" href="CSS\stylereclamacao.css">
    <script src="https://kit.fontawesome.com/e785a5ab3e.js" crossorigin="anonymous"></script>
    <title>Lista de Reclamações</title>
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
    <h1 id="titulo">Reclamações</h1>
<div class="container">

    <div id="alinhamentoTabela">
        
        <table class="table">
            <?php include_once("reclamacao.php");
                $vetreclamacoes = retornaReclamacoes();
                echo('<tr style="font-weight:bold;"> <td>Laboratório</td> <td>Data</td> <td>Descrição</td>' );
                if ($vetreclamacoes != null) {
                    foreach ($vetreclamacoes as $reclamacao) {
                        $lab = $reclamacao['lab'];
                        $data = $reclamacao['data_reclamacao'];
                        $descricao = $reclamacao['descricao'];
                        $idreclamacao = $reclamacao['id'];
                        echo utf8_encode('<tr> <td>'.$lab.'</td> <td>'.$data.'</td> <td>'.$descricao.'</td> <td><a href="excluir.php?id='. $idreclamacao.'"><i class="fa-solid fa-check"></i></a></td>');
                    } 
                }else {
                    echo("<tr><td>Nenhum registro encontrado!</td></tr>");
                }
                ?>
        </table>
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