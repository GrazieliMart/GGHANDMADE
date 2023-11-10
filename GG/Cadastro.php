<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

<?php
            // As mensagens de sucesso ou erro serão exibidas dentro da div form-style
            if (isset($_SESSION['success_message'])) {
                echo '<div class="sucess-message">' . $_SESSION['success_message'] . '</div>';
                unset($_SESSION['success_message']); // Limpar a mensagem após exibição
            }

            if (isset($_SESSION['error_message'])) {
                echo '<div class="error-message">' . $_SESSION['error_message'] . '</div>';
                unset($_SESSION['error_message']); // Limpar a mensagem após exibição
            }
            ?>
<form method="post">
<div class="titleEsqueciSenha">
    <h1>Cadastre-se</h1>
    <p>Crie sua conta para poder realizar compras</p>

</div>

<div class="text-div">
<input type="text" placeholder="Nome" require name="name">
</div>

<div class="text-div">
<input type="email" placeholder="E-mail" require name="email">
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
        <a href="Login.php"><i class="bi bi-box-arrow-in-left"></i>Voltar ao Login</a>
</div>

</form>
</div>




<!--Responsividade-->

<div class="mobile-menu">
<div class="form-style">


<div class="logo-login-kassadin">

</div>

<div class="text-div">
<input type="text" placeholder="Nome" require name="name">
</div>

<div class="text-div">
<input type="email" placeholder="E-mail" require name="email">
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
        <a href="Login.php"><i class="bi bi-box-arrow-in-left"></i>Voltar ao Login</a>
</div>


</div>

</div>

<script src="js/scriptEye.js"></script>
</body>
</html>