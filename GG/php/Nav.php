<?php
echo ' <header>
<nav class="nav-bar">
    <div class="logo">
        <img src="img/logo.jpeg" class="logoNav">
    </div>
    <div class="nav-list">
        <ul>
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Artisan KeyCaps</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Crochet</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Sobre nós</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
        </ul>
    </div>
    <div class="login-Icons">
      
        <button onclick="scriptNavLogin()" id="buttonlogin"><a href="#" id="icon-login" ><i class="bi bi-person" ></i></a>
        <a href="#" id="icon-conta">Conta</a> 

        <div id="containerlogin" >

        <a href="Login.php" id="icon-loginDiv" ><i class="bi bi-box-arrow-in-right"></i>Login</a>
       <a></a>
        <a href="Cadastro.php" id="icon-cadastroDiv" > <i class="bi bi-person-fill"></i>Cadastro</a>

        </div>
        </button>
       
        <button><a href="#" id="icon-bag"><i class="bi bi-bag"></i></a></button>
        
    </div>

    <div class="mobile-menu-icon">
       <button onclick="menuShow()"><img class="icon" src="img/icone-aberto.svg"></button>
    </div>
</nav>


<!--Responsividade-->
<div class="mobile-menu">
    <ul>
    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Artisan KeyCaps</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Crochet</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Sobre nós</a></li>
    <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
    </ul>

    <div class="login-Icons">
    <button onclick="scriptNavLogin()" id="buttonlogin"><a href="#" id="icon-login" ><i class="bi bi-person" ></i></a>
        <a href="#" id="icon-conta">Conta</a> 

        <div id="containerlogin" >

        <a href="Login.php" id="icon-loginDiv" ><i class="bi bi-box-arrow-in-right"></i>Login</a>
       <a></a>
        <a href="Cadastro.php" id="icon-cadastroDiv" > <i class="bi bi-person-fill"></i>Cadastro</a>

        </div>
        </button>
        
        <button><a href="#" id="icon-bag"><i class="bi bi-bag"></i></a></button>

    <div class="mobile-menu">
    
</div>
</header>  
';
?>