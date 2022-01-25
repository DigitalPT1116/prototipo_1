<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #fff;
            background-image: linear-gradient(to right, #ed563b,  #ed563b);
            color:white;
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 10px;
            font-family: arial;
            
        }
        .inputSubmit{
            background-color: #ed563b;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            font-family: arial;
            
        }
        .inputSubmit:hover{
            background-color: white;
            cursor: pointer;
            color: #ed563b;
            border: 2px solid #ed563b;
        }

        a:link, a:visited {
            background-color: #ed563b;
            color: white;
            border: 2px solid whitesmoke;
            border-radius: 10px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover, a:active {
            background-color: White;
            border: 2px solid #ed563b;
            color: #ed563b;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <h1 align="center" >Digital PT</h1>
    <div>
        <h1 align="center" >Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="nome" placeholder="Nome">
            <br><br>
            <input type="password" name="password" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
    </div>
</body>
</html>