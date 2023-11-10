<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include('bd.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cadUsuario'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    cadUsuario($name, $email, $senha);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>GGHANDMADE | Cadastro</title>
    <link rel="icon" type="image/png" href="img/gatito.png" sizes="32x32">
</head>



<body class="body-back">


<div class="form-style">
<form method="post">
<div class="logo-login-kassadin">

</div>

<div class="text-div">
<input type="text" placeholder="Nome" require name="name">
</div>

<div class="text-div">
<input type="text" placeholder="E-mail" require name="email">
</div>


<div class="text-div">
<i class="bi bi-eye-fill" id="eye" onclick="MostrarSenha()" ></i>
<input type="password" placeholder="Senha" require id="senha" name="senha">  
</div>


<button class="btn-login" name="cadUsuario" type="submit">Cadastrar</button>
<br> 



<div class="cadastro-link">
    <p>Ao criar uma conta, você concorda com a 
        <a href="#">Política de Privacidade</a> da GGHANDMADE.
    </p>
</div>

<div class="voltar-link">
        <a href="Index.php"><i class="bi bi-house" id="icone-casa" onclick="BotaoVoltar()"></i>Voltar</a>
</div>

</form>
</div>



<!--Responsividade-->

<div class="mobile-menu">
<div class="form-style">

<div class="logo-login-kassadin">
<img src="img/kassadin.png" id="logo-login">
</div>
<div class="text-div">
<i class="bi bi-person-fill" ></i>
<input type="text" placeholder="E-mail" require>

</div>
<div class="text-div">
<i class="bi bi-eye-fill" id="eye" onclick="MostrarSenha()" ></i>
<input type="password" placeholder="Senha" require id="senha">  

</div>
<div class="lembrar-senha">
<label><input type="checkbox">Lembrar de mim</label>

<a href="#">Esqueceu a senha?</a>

</div>
<button class="btn-login" type="submit">Login</button>
<div id="buttonDiv"></div>

<div class="cadastro-link">
    <p>Não tem uma conta?
        <a href="#">Cadastre-se</a>
    </p>
</div>
<div class="voltar-link">
        <a href="Index.php"><i class="bi bi-house" id="icone-casa" onclick="BotaoVoltar()"></i>Voltar</a>
</div>


</div>
</div>

<script src="js/scriptEye.js"></script>
</body>
</html>