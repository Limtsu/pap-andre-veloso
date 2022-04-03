<html>

<head>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <title>ForJuda - PAP</title>


</head>

<body>
    <header class="menu-principal">
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
        </main>
    </header>

    <div class="container" style="margin-top: 100px;">
        <form action="testLogin.php" method="POST" class="multi-step-form">
            <div class="card" style="animation: none">
                <h3 class="step-title">Por favor insira os deus dados de login</h3>
                <br>
                <div class="form-floating">
                    <input class="form-control" type="text" name="email">
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="form-floating">
                    <input class="form-control" type="password" name="passworde">
                    <label for="email" class="labelInput">Password</label>
                </div>
                <br>
                <input class="btn btn-lg btn-primary" type="submit" name="submit" value="Login" style="width:50%; margin:auto">
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>