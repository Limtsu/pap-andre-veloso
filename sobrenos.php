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

    <div class="container" style="width:70%; margin:auto; margin-top:100px;">
        <h3>Já pensou ir a um psicólogo mas quando olhou para o custo ou reparou que não tinha tempo teve de esquecer a ideia? Quer uma forma de aliviar o que sente de forma rápida, sem compromisso e grátis? É isso mesmo que o meu projeto visa trazer. Eu quero criar um site onde possam haver diferentes grupos onde diferentes pessoas possam se juntar e falar sobre o seu problema ou apenas ler sobre alguém que enfrenta algo parecido a eles mesmos. Algo simples e fácil de utilizar e que consiga abranger múltiplas pessoas.</h3>

        <img src="./img/dialogoajuda.png" style="width: inherit; display: flex; margin: 0 auto; max-width: 900px; max-height: 700px; padding: 16px;"/>

    </div>


</body>

</html>