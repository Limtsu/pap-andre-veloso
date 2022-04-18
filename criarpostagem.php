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

    if(isset($_POST['submite']))
    {

        $tituloposte = $_POST['titulopost'];
        $conteudoposte = $_POST['conteudopost'];

        $result = mysqli_query($conexao, "INSERT INTO postagens(titulopost, conteudopost) VALUES ('$tituloposte', '$conteudoposte')");

        if($conexao->connect_errno) {
            erro();
        }
        else {
            $_SESSION['titulopost'] = $tituloposte;
            $_SESSION['conteudopost'] = $conteudoposte;
        }
        

        header('Location: indexregistadopost.php');
    }


?>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <script src="scriptregistar.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ForJuda - PAP</title>

    <script>
        function erro() {
            alert("Houve um erro na criação do seu post")
            window.location.href = "indexregistado.php";
        }
    </script>

</head>

<body>
    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div style="float: right; color:white;">
                    <h3 style="font-size: 1.17em; margin: 1em;">Bem vindo, <?php echo $logado ?> </h3>
                </div>

                <div class="redes-sociais" style="padding-top: 16px;">
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
    <main class="col-100 menu-urls" style="margin-top: 10px;height: 50px;">
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

    <main>
    <div class="container" style="text-align:center; margin-top: 100px">
        <form action="criarpostagem.php" method="POST" data-multi-step class="multi-step-form">
            <div class="card" data-step>
                <fieldset>
                    <legend class="step-title">Insira o título e conteúdo do seu post</legend>
                    <br>
                    <div class="form-floating">
                        <input type="text" name="titulopost" id="titulopost" class="form-control" required>
                        <label for="titulopost" class="labelInput">Titulo do post</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <textarea rows="30" style="height:15rem" type="text" name="conteudopost" id="conteudopost" class="form-control" required></textarea>
                        <label for="conteudopost" class="labelInput">Conteudo do post</label>
                    </div>
                    <br>
                    <input class="btn btn-lg btn-primary" type="submit" name="submite" id="submite" style="display: flex; margin: auto;">
                </fieldset>
        </div>
    </form>
    </div>

    </main>
</body>

</html>