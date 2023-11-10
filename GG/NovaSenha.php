<?php
include('bd.php'); // Inclua o arquivo de conexão com o banco de dados

if (isset($_POST['atualizarSenha'])) {
    $email = $_POST['email'];
    $novaSenha = $_POST['novaSenha'];

    atualizarSenhaUsuario($email, $novaSenha); // Chame a função definida no arquivo bd.php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>GGHANDMADE | Redefinição de Senha</title>
    <link rel="icon" type="image/png" href="img/gatito.png" sizes="32x32">
</head>



<body class="body-back">


<div class="form-style">
<div id="senhaAlert" class="error-message" style="display: none;">
    <i class="bi bi-exclamation-triangle"></i>
    <span class="title-error">Tente Novamente</span><br>
    <span style="color: #3f3c3a79;" class="subtitle-error">As senhas não coincidem</span>
</div>

<form method="post" onsubmit="return validarSenhas();">
    <div class="titleEsqueciSenha">
        <h1>Redefina sua senha</h1>
        <p>Crie uma nova senha para acessar sua conta</p>
    </div>
    
    <div class="text-div">
        <input type="email" name="email" placeholder="E-mail" required>
    </div>

    <div class="text-div">
        <i class="bi bi-eye-fill" id="eye" onclick="MostrarSenha()"></i>
        <input type="password" placeholder="Insira sua nova senha" required id="senha" name="novaSenha">
    </div>

    <div class="text-div">
        <input type="password" placeholder="Confirme sua senha" required id="confirmarSenha" name="confirmarSenha">
    </div>

    <button class="btn-login" name="atualizarSenha" type="submit">Atualizar Senha</button>
    <br>

    <div class="voltar-link">
        <a href="Login.php"><i class="bi bi-box-arrow-in-left"></i>Voltar ao Login</a>
    </div>
</form>
</div>




<!--Responsividade-->

<div class="mobile-menu">
<div class="form-style">


<div class="logo-login-kassadin">

</div>



<div class="titleEsqueciSenha">
        <h1>Redefina sua senha</h1>
        <p>Crie uma nova senha para acessar sua conta</p>
    </div>

    <div class="text-div">
        <i class="bi bi-eye-fill" id="eye" onclick="MostrarSenha()"></i>
        <input type="password" placeholder="Insira sua nova senha" required id="senha" name="novaSenha">
    </div>

    <div class="text-div">
        <input type="password" placeholder="Confirme sua senha" required id="confirmarSenha" name="confirmarSenha">
    </div>

    <button class="btn-login" name="atualizarSenha" type="submit">Atualizar Senha</button>
    <br>

    <div class="voltar-link">
        <a href="Login.php"><i class="bi bi-box-arrow-in-left"></i>Voltar ao Login</a>
    </div>


</div>

</div>
<script src="js/validarSenhas.js"></script>
<script src="js/scriptEye.js"></script>

</body>
</html>