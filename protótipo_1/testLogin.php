<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['password']))
    {
        // Acessa
        include_once('config.php');
        $nome = $_POST['nome'];
        $password = $_POST['password'];

        // print_r('nome: ' . $nome);
        // print_r('<br>');
        // print_r('password: ' . $password);

        $sql = "SELECT * FROM utilizadores WHERE nome = '$nome' and password = '$password'";

        $result = $con->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['nome']);
            unset($_SESSION['password']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['nome'] = $nome;
            $_SESSION['password'] = $password;
            header('Location: sistema.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>