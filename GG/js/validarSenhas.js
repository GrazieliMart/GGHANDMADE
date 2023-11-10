function validarSenhas() {
    var senha = document.getElementById("senha").value;
    var confirmarSenha = document.getElementById("confirmarSenha").value;
    var senhaAlert = document.getElementById("senhaAlert");

    if (senha !== confirmarSenha) {
        senhaAlert.style.display = "block"; // Exibe a div de alerta
        return false;
    } else {
        senhaAlert.style.display = "none"; // Oculta a div de alerta se as senhas coincidirem
    }

    return true;
}