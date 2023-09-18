<?php
echo'<div class="form-style">
<form action="">
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
<br> 


<div class="cadastro-link">
    <p>Não tem uma conta?
        <a href="#">Cadastre-se</a>
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
<form action="">
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
<br> 


<div class="cadastro-link">
    <p>Não tem uma conta?
        <a href="#">Cadastre-se</a>
    </p>
</div>
<div class="voltar-link">
        <a href="Index.php"><i class="bi bi-house" id="icone-casa" onclick="BotaoVoltar()"></i>Voltar</a>
</div>

</form>
</div>
</div>
';
?>