<?php
echo ' <header>
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
    <br>
    <a href="Login.php" class="nav-login-id">Contas e Pedidos</a>
    <div class="login-popup">
    <button class="login-button"> <a href="Login.php" class="nav-login">Login</a></button>
  </div>
</div>

<div class="div-nav-car">
<i class="bi bi-cart2"></i>
    <a href="#" class="nav-login">Carrinho</a>
   
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
';
?>