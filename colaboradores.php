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
                        <a href="indexregistado.php">Início</a>
                    </li>
                    <li>
                        <a href="sobrenos.php">Sobre Nós</a>
                    </li>
                    <li>
                        <a href="ajuda.php">Serviços de Ajuda</a>
                    </li>
                    <li>
                        <a href="colaboradores.php">Colaboradores</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <div style="text-align: center; margin-top:100px; font-family:sans-serif;">
        <h2>Criador: André Veloso</h2>
        <h2>Colaboradores: Leandro Almeida, Bruno Júnior, Tiago Coelho</h2>
        <h3>Maior contribuidor: A Escola Profissional da Nazaré por abrir este curso no qual me <strong>apaixonei</strong> durante estes três anos e </h3>
        <h3>Professores: Professora Maria José pela ajuda e disponibilidade na realização do projeto.<br>Professora Carla Franco e Patricia Moreira por disponibilizarem aulas para a concretização do mesmo.<br>Professora Helena Barreiras por ajudar na gramática utilizada pelo projeto inteiro.</h3>
    </div>

</body>

</html>