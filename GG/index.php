<?php
session_start();
include 'bd.php'; 


// Verifique se 'email' está definido na sessão antes de acessá-lo
$email = isset($_SESSION['email']) ? $_SESSION['email'] : null;

$pdo = conexaoBd();
$stmt = $pdo->prepare("SELECT name FROM cadGG WHERE email = :email");
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $userName = $user['name'];
} else {
    // Trate a situação em que o nome do usuário não é encontrado
    $userName = "Usuário";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Nav.css">
    <link rel="stylesheet" href="css/Index.css">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <title>GGHANDMADE | Home </title>
</head>
<?php
include 'NavBar.php';
?>


<body>
<div class="content">
        <h2>Bem-vindo, <?php echo $userName; ?>!</h2>
    </div>
    <a href="logout.php">
            <span class="icon"><i class="bi bi-arrow-bar-left"></i></span>
            <span class="txt-link">SAIR</span>
        </a>

    <script src="js/scriptNav.js"></script>
    <script src="js/scriptNavLogin.js"></script>
  

    

    <!--Responsividade-->
    <div class="mobile-menu">
   
    </div>

</body>
</html>