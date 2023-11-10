<?php


if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
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
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="img/gatito.png" sizes="32x32">
   
</head>
<header>
<nav class="nav-bar">
    <div class="logo">
        <img src="img/logo.jpeg" class="logoNav">
    </div>
   
    <div class="group">
    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
        <g>
            <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
        </g>
    </svg>
    <input placeholder="Search" type="search" class="input">
</div>


<div class="div-nav-log">
<div class="div-nav-login">

    <a href="Login.php" class="nav-login">Olá, faça seu login</a>
    <h2>Bem-vindo, <?php echo $userName; ?>!</h2>
    
    <a href="Login.php" class="nav-login-id">Contas e Pedidos</a>
    
    <div class="login-popup">
        <a href="Login.php" class="nav-login"><button class="login-button">Login</button></a>
        <p class="link-cad">Não tem login?<br><a href="Cadastro.php">Cadastre-se</a></p>
    </div>
</div>


<div class="div-nav-car">

    <a href="#" class="nav-login"><i class="bi bi-cart2"></i></a>
   
</div>
</div>

    <div class="mobile-menu-icon">
       <button onclick="menuShow()"><img class="icon" src="img/icone-aberto.svg"></button>
    </div>
   
</nav>

<div class="nav-list">
<ul>
    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Artisan KeyCaps</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Crochet</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Sobre nós</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
</ul>


</div>


<!--Responsividade-->
<div class="mobile-menu">

<div class="nav-list">
    <ul>
    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Artisan KeyCaps</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Crochet</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Sobre nós</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
    </ul>
    </div>
   
       
  
    
</div>
</header>  
<body>
    
</body>
</html>