<?php
require 'vendor/autoload.php'; // Certifique-se de que a biblioteca PHPMailer está instalada via Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function novaSenhaGG(){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    include("bd.php");

    function enviarEmail($destinatario, $assunto, $mensagem) {
        $mail = new PHPMailer(true);

        try {
                           //Enable verbose debug output
          $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = 'mikayonekawa@gmail.com';     
          $mail->Password   = '*********';         
          $mail->Password   = 'vwhv tmxf wlgf viir';                               //SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
          $mail->Port       = 465;   

            $mail->isHTML(true);
            $mail->Subject = $assunto;
            $mail->Body = $mensagem;

            $mail->setFrom('grazielimartins5@gmail.com', 'GGHANDMADE | CROCHÊ STORE');
            $mail->addAddress($destinatario);

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    // Verifique se o email existe no banco de dados
    $pdo = conexaoBd();
    $stmt = $pdo->prepare("SELECT * FROM cadGG WHERE email = :email");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

   if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // Gere uma nova senha
    $novaSenha = substr(md5(uniqid(mt_rand(), true)), 0, 8);
    $senhaHash = password_hash($novaSenha, PASSWORD_BCRYPT);

    // Atualize a senha do usuário no banco de dados
    $stmt = $pdo->prepare("UPDATE cadGG SET senhaHash = :senhaHash WHERE name = :name");
    $stmt->bindParam(':senhaHash', $senhaHash);
    $stmt->bindParam(':name', $user['name']);
    $stmt->execute();

    $assunto = "GGHANDMADE";
    $paginaNovaSenha = "http://localhost/GGHANDMADE/GG/NovaSenha.php";
    $mensagem = "Clique no link a seguir para cadastrar uma nova senha: <a href='$paginaNovaSenha'>$paginaNovaSenha</a>";

    if (enviarEmail($email, $assunto, $mensagem)) {
        echo ' <div class="sucess-message">';
        echo "
        <i class='bi bi-check-lg'></i>
        <span class='title-sucess'>Link enviado com sucesso!</span><br>
        <span  class='subtitle-sucess'>Um link de redifinição de senha foi enviado a sua caixa de entrada.</span></div>";
    } else {
        echo ' <div class="error-message">';
        echo "
        <i class='bi bi-check-lg'></i>
        <span class='title-error'>Houve um problema</span><br>
        <span class='subtitle-error'>Houve um erro com o servidor!<br>Entre em contato pelo número: (19)99632-8096</span></div>";
    }
} else {
    echo ' <div class="error-message">';
    echo "
    <i class='bi bi-exclamation-triangle'></i>
    <span class='title-error'>Houve um problema</span><br>
    <span style='color: #3f3c3a79;' class='subtitle-error'>Não encontramos uma conta associada a este endereço de e-mail!</span></div>";
}
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="css/login.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>GGHANDMADE | Recuperação de Senha</title>
    <script src="https://accounts.google.com/gsi/client" async></script>
   
    
  
<link rel="icon" type="image/png" href="img/gatito.png" sizes="32x32">
</head>

<body class="body-back">


<div class="form-style">
<div id="error-message">
<?php


novaSenhaGG();

?>


<form method="post">
<div class="titleEsqueciSenha">
    <h1>Auxílio de Senha</h1>
    <p>Insira o endereço de e-mail associado à sua conta GGHANDMADE</p>

</div>
<div class="text-div">
   
    <input type="email" placeholder="E-mail" required name="email">
</div>


<button class="btn-login" type="submit" name="submit">Continuar</button>
<br> 
<div class="voltar-link">
        <a href="Login.php"><i class="bi bi-box-arrow-in-left" onclick="BotaoVoltar()"></i>Cancelar</a>
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
<input type="text" placeholder="E-mail" require>

</div>

<button class="btn-login" type="submit" name="submit">Enviar</button>




</div>
</div>

</body>
</html>

