<?php
    session_start();

    include_once('config.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['passworde']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['passworde']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <title>ForJuda - PAP</title>
</head>

<body>
    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div style="float: right; color:white">
                    <?php
                        echo "<h3>Bem vindo, $logado</h3>";
                    ?>
                </div>
                <div class="redes-sociais" style="padding-top: 3px;">
                    <ul>
                        <li>
                            <a href="https://www.epnazare.eu/">
                                <img src="./img/rss.png" style="height: 23px"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/EPNazare">
                                <img src="./img/face.png" style="height: 23px"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/Epnazar1">
                                <img src="./img/tw.png" style="height: 23px"/>
                            </a>
                        </li>
                        <li>
                            <a href="dawdaw.html">
                                <img src="./img/linkedin.png" style="height: 23px"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </header>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li>
                        <a href="indexregistado.php">In??cio</a>
                    </li>
                    <li>
                        <a href="sobrenos.php">Sobre N??s</a>
                    </li>
                    <li>
                        <a href="ajuda.php">Servi??os de Ajuda</a>
                    </li>
                    <li>
                        <a href="colaboradores.php">Colaboradores</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    
    <div style="text-align: center; margin-top:100px; font-family:sans-serif;">
        <h2>SOS VOZ AMIGA</h2>
        <h3>Hor??rio: Diariamente das 15:30 ??s 00:30<br>Contacto Telef??nico: 213 544 545 | 912 802 669 | 963 524 660</h3> 
        <br>
        <h2>CONVERSA AMIGA</h2>
        <h3>Hor??rio: 15:00 ??? 22:00<br>Contacto Telef??nico: 808 237 327 | 210 027 159</h3>
        <br>
        <h2>VOZES AMIGAS DE ESPERAN??A DE PORTUGAL</h2>
        <h3>Hor??rio: 16:00 ??? 22:00<br>Contacto Telef??nico: 222 030 707</h3>
        <br>
        <h2>TELEFONE DA AMIZADE</h2>
        <h3>Hor??rio: 16:00 ??? 23:00<br>Contacto Telef??nico: 222 080 707</h3>
        <br>
        <h2>VOZ DE APOIO</h2>
        <h3>Hor??rio: 21:00 ??? 24:00<br>Contacto Telef??nico: 225 506 070<br> Email: sos@vozdeapoio.pt</h3>
    </div>

</body>

</html>