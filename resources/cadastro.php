<?php

session_start();
include('../database/conexao.php');


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/stile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Bem-Vindo, novamente!</h2>
                <p class="description description-primary">Para manter-se conectado,</p>
                <p class="description description-primary">faça o login.</p>
                <button id="signin" class="btn btn-primary">Entrar</button>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Cadastre-se</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="https://pt-br.facebook.com/">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>        
                            </li>
                        </a>
                        <a class="link-social-media" href="https://gmail.com/mail/help/intl/pt_pt/about.html">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="https://br.linkedin.com/">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div><!-- social media -->
                <p class="description description-second">Acesse com suas informações pessoais:</p>
                <form  action="../database/cadastrar.php" class="form" method="POST">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input name="nome_cadastro" type="text" placeholder="Nome">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="email_cadastro" type="email" placeholder="Email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="senha_cadastro" type="password" placeholder="Senha">
                    </label>
                    
                    
                    <button class="btn btn-second">Cadastre-se</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá!</h2>
                <p class="description description-primary">Insira seus dados,</p>
                <p class="description description-primary">para ter acesso ao site.</p>
                <button id="signup" class="btn btn-primary">Cadastre-se</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Login</h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-google-plus-g"></i>
                            </li>
                        </a>
                        <a class="link-social-media" href="#">
                            <li class="item-social-media">
                                <i class="fab fa-linkedin-in"></i>
                            </li>
                        </a>
                    </ul>
                </div>
                <p class="description description-second">Acesse com o gmail:</p>
                <form action="../database/login.php" class="form" method="POST">       
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="email_login" type="email" placeholder="Email">
                    </label>
                
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="senha_login" type="password" placeholder="Senha">
                    </label>
                
                    <a class="password" href="#">Esqueceu sua senha?</a>
                    <button class="btn btn-second">Entrar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>