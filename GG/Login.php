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
  

</head>

<body class="body-back">

<?php
include 'php/FormLogin.php';
?>

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

