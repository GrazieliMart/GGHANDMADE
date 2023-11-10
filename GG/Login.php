
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="js/google.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>GGHANDMADE | Login</title>
    <script src="https://accounts.google.com/gsi/client" async></script>
    <meta name="google-signin-client_id" content="395619988103-ke0o93ktme85p356ugkc17m75ki6qn7k.apps.googleusercontent.com">
    <script src="
https://cdn.jsdelivr.net/npm/jwt-decode@3.1.2/build/jwt-decode.min.js
"></script>
  
<link rel="icon" type="image/png" href="img/gatito.png" sizes="32x32">
</head>

<body class="body-back">


<div class="form-style">
<div id="error-message">
            <?php

            include("bd.php");
            loginGG();

            ?>

<form method="post">
<div class="logo-login-kassadin">
<img src="img/gatito.png" id="logo-login">
</div>
<div class="text-div">
    <i class="bi bi-person-fill"></i>
    <input type="text" placeholder="E-mail" required name="email">
</div>
<div class="text-div">
    <i class="bi bi-eye-fill" id="eye" onclick="MostrarSenha()"></i>
    <input type="password" placeholder="Senha" required id="senha" name="senha">  
</div>
<div class="lembrar-senha">


<a href="EsqueciSenha.php">Esqueceu a senha?</a>


</div>
<button class="btn-login" type="submit" name="submit">Login</button>
<br> 

<div id="buttonDiv"></div>


<div class="cadastro-link">
    <p>Não tem uma conta?
        <a href="Cadastro.php">Cadastre-se</a>
    </p>
</div>

<div class="voltar-link">
        <a href="Index.php"><i class="bi bi-house" id="icone-casa" onclick="BotaoVoltar()"></i>Voltar</a>
</div>

</form>
</div>
</div>



<!--Responsividade-->

<div class="mobile-menu">
<div class="form-style">
    

<div class="logo-login-kassadin">
<img src="img/kassadin.png" id="logo-login">
</div>
<div class="text-div">
<i class="bi bi-person-fill" ></i>
<input type="email" placeholder="E-mail" require>

</div>
<div class="text-div">
<i class="bi bi-eye-fill" id="eye" onclick="MostrarSenha()" ></i>
<input type="password" placeholder="Senha" require id="senha">  

</div>
<div class="lembrar-senha">
<label><input type="checkbox">Lembrar de mim</label>

<a href="EsqueciSenha.php">Esqueceu a senha?</a>



</div>
<button class="btn-login" type="submit">Login</button>
<div id="buttonDiv"></div>

<div class="cadastro-link">
    <p>Não tem uma conta?
        <a href="Cadastro.php">Cadastre-se</a>
    </p>
</div>
<div class="voltar-link">
        <a href="Index.php"><i class="bi bi-house" id="icone-casa" onclick="BotaoVoltar()"></i>Voltar</a>
</div>


</div>
</div>
<script>

        function handleCredentialResponse(response) {
            const data = jwt_decode(response.credential)
            console.log(data)
            verificar(data)
        }

        window.onload = function () {
            google.accounts.id.initialize({
                client_id: "395619988103-ke0o93ktme85p356ugkc17m75ki6qn7k.apps.googleusercontent.com",
                callback: handleCredentialResponse
            });
            google.accounts.id.renderButton(
                document.getElementById("buttonDiv"),
                {
                   type: "standard",
    shape: "pill",
    theme: "outline",
    text: "signin_with",
    size: "large",
    width: "100%",
    logo_alignment: "left",
                }  // customization attributes
            );
            google.accounts.id.prompt(); // also display the One Tap dialog
        }
        function verificar(data){
            if(data.email == 'grazielimartins5@gmail.com'){
                window.location = '/GGHANDMADE/GG/index.php'
            }
        }
    </script>
<script src="js/scriptEye.js"></script>
<script src="js/scriptBotao.js"></script>

</body>
</html>

