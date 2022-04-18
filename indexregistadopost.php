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



    <div class="container">
        <a href="criarpostagem.php" class="botao botao2"> 
            Criar um post
        </a>
        <div class="subforum">
            <div class="subforum-title" style="padding-left: 16px;font-family: Helvetica;width: 70%;background-color: #ff4500;border-radius: 10px;margin-left: 10px;margin-top: 100px;">
                <h1 style="color:white">Assunto do Momento</h1>
            </div>
            <div class="subforum-row" style="padding-left: 32px;font-family: calibri;width: 70%;background-color: #DDD;border-radius: 10px;margin-left: 10px;">
                
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Tópico 1</a></h4>
                    <p>Conteúdo: Clique neste post para ver esta informação.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Postagens | 12 Tópicos</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="#">Última postagem</a></b> por <a href="#">UsuárioX</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
                
            </div>
            <hr class="subforum-devider">
        </div>
        <div class="subforum">
            <div class="subforum-title" style="padding-left: 16px;font-family: Helvetica;width: 70%;background-color: #ff4500;border-radius: 10px;margin-left: 10px;">
                <h1 style="color:white">Tópicos Recentes</h1>
            </div>
            <div class="subforum-row" style="padding-left: 32px;font-family: calibri;width: 70%;background-color: #DDD;border-radius: 10px;margin-left: 10px;">
                <div class="subforum-description subforum-column">
                    <h4><a href="post.php"><?php echo $titulopostagem?></a></h4>
                    <p>Conteúdo: Clique neste post para ver esta informação.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Postagens | 12 Tópicos</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Última postagem</a></b> por <a href=""><?php echo $logado?></a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row" style="padding-left: 32px;font-family: calibri;width: 70%;background-color: #DDD;border-radius: 10px;margin-left: 10px;">
                
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Título Aleatório</a></h4>
                    <p>Conteúdo: Clique neste post para ver esta informação.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Postagens | 12 Tópicos</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Última postagem</a></b> por <a href="">UsuárioX</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row" style="padding-left: 32px;font-family: calibri;width: 70%;background-color: #DDD;border-radius: 10px;margin-left: 10px;">
                
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Título Aleatório</a></h4>
                    <p>Conteúdo: Clique neste post para ver esta informação.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Postagens | 12 Tópicos</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Última postagem</a></b> por <a href="">UsuárioX</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row" style="padding-left: 32px;font-family: calibri;width: 70%;background-color: #DDD;border-radius: 10px;margin-left: 10px;">
                
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Título Aleatório</a></h4>
                    <p>Conteúdo: Clique neste post para ver esta informação.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Postagens | 12 Tópicos</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Última postagem</a></b> por <a href="">UsuárioX</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row" style="padding-left: 32px;font-family: calibri;width: 70%;background-color: #DDD;border-radius: 10px;margin-left: 10px;">
                
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Título Aleatório</a></h4>
                    <p>Conteúdo: Clique neste post para ver esta informação.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Postagens | 12 Tópicos</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Última postagem</a></b> por <a href="">UsuárioX</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
        </div>
        
        <div class="subforum">
            <div class="subforum-title" style="padding-left: 16px;font-family: Helvetica;width: 70%;background-color: #ff4500;border-radius: 10px;margin-left: 10px;">
                <h1 style="color:white">Tópicos Famosos</h1>
            </div>
            <div class="subforum-row" style="padding-left: 32px;font-family: calibri;width: 70%;background-color: #DDD;border-radius: 10px;margin-left: 10px;">
                
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Título Aleatório</a></h4>
                    <p>Conteúdo: Clique neste post para ver esta informação.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Postagens | 12 Tópicos</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Última postagem</a></b> por <a href="">UsuárioX</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row" style="padding-left: 32px;font-family: calibri;width: 70%;background-color: #DDD;border-radius: 10px;margin-left: 10px;">
                
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Título Aleatório</a></h4>
                    <p>Conteúdo: Clique neste post para ver esta informação.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Postagens | 12 Tópicos</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Última postagem</a></b> por <a href="">UsuárioX</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row" style="padding-left: 32px;font-family: calibri;width: 70%;background-color: #DDD;border-radius: 10px;margin-left: 10px;">
                
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Título Aleatório</a></h4>
                    <p>Conteúdo: Clique neste post para ver esta informação.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Postagens | 12 Tópicos</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Última postagem</a></b> por <a href="">UsuárioX</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="subforum-row" style="padding-left: 32px;font-family: calibri;width: 70%;background-color: #DDD;border-radius: 10px;margin-left: 10px;">
                
                <div class="subforum-description subforum-column">
                    <h4><a href="#">Título Aleatório</a></h4>
                    <p>Conteúdo: Clique neste post para ver esta informação.</p>
                </div>
                <div class="subforum-stats subforum-column center">
                    <span>24 Postagens | 12 Tópicos</span>
                </div>
                <div class="subforum-info subforum-column">
                    <b><a href="">Última postagem</a></b> por <a href="">UsuárioX</a> 
                    <br>on <small>12 Dec 2020</small>
                </div>
            </div>

           
        </div>
    </div>
        </div>
    </div>
    
  
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/jquery-migrate.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>


</html>


