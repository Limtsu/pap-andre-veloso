<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['passworde']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $password = $_POST['passworde'];

        $sql = "SELECT * FROM utilizadores WHERE email = '$email' and passworde = '$password'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['passworde']);
            header('Location: registar.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['passworde'] = $password;
            header('Location: indexregistado.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>