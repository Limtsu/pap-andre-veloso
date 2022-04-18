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
    $titulopostagem = $_SESSION['titulopost'];
    $conteudopostagem = $_SESSION['conteudopost'];

?>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <title>ForJuda - PAP</title>

</head>

<body>
    <header class="menu-principal">
        <a href="logout.php" class="btn btn-danger" style="color: rgb(255, 255, 255); padding: 8px 10px; text-align: center; text-decoration: none; font-size: 20px; font-family: Arial, Helvetica, sans-serif; cursor: pointer; border-radius: 8px; float: right; background-color:#bb2d3b; margin-right: 300px; margin-top: 10px;">Logout</a>
        <main>
            <div class="header-1">
                <div style="color:white; float:right;">
                    <?php
                        echo "<h3>Bem vindo, $logado</h3>";
                    ?>
                </div>
                <div class="redes-sociais" style="padding-top: 3px" >
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
                        <a href="indexregistadopost.php">Início</a>
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

    <div class="post"> 
        <div class="titulo">
            <h2><?php echo $titulopostagem ?></h2>
        </div>
    </div>
    <div class="post" style="margin-top:10px;">
        <div class="conteudo">
            <h3><?php echo $conteudopostagem ?></h3>
        </div>
    </div>


</body>

</html>