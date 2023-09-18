function MostrarSenha(){
    var inputPass = document.getElementById('senha');
    var iconPass = document.getElementById('eye');
    if (inputPass.type === 'password'){
        inputPass.setAttribute('type', 'text');
        iconPass.classList.replace('bi-eye-fill','bi-eye-slash-fill');
    }else{
    inputPass.setAttribute('type','password');
    iconPass.classList.replace('bi-eye-slash-fill','bi-eye-fill');
    }
}

