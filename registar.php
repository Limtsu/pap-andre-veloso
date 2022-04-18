<?php

    if(isset($_POST['submit']))
    {
        session_start();
        include_once('config.php');

        $email = $_POST['email'];
        $password = $_POST['passworde'];


        $result = mysqli_query($conexao, "INSERT INTO utilizadores(email, passworde) 
        VALUES ('$email', '$password')");

        header('Location: index.html');
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <script src="scriptregistar.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ForJuda - PAP</title>
</head>

<body>
    <header class="menu-principal" style="margin-bottom: 100px">
        <main>
            <div class="header-1">
                <div class="logo">
                    <a href="index.html">
                        <img src="./img/logo.png" style="padding: 2.5px;"/>
                    </a>
                </div>
                <div class="redes-sociais" style="padding-top: 3px; float: right; margin-top: 13px;">
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
    </header>
    <form action="registar.php" method="POST" data-multi-step class="multi-step-form">
        <div class="card" data-step style="max-width:400px">
            <fieldset>
                <legend class="step-title">Efetue o registo</legend>
                <br>
                <div class="form-floating">
                    <input type="email" name="email" id="email" class="form-control" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" name="passworde" id="passworde" class="form-control" required>
                    <label for="passworde" class="labelInput">Senha</label>
                </div>
                <br>
                <input class="btn btn-lg btn-primary" type="submit" name="submit" id="submit" style="display: flex; margin: auto;">
            </fieldset>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>