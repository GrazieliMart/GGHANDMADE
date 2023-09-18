var iconeCasa = document.getElementById('icone-casa');

iconeCasa.addEventListener('mouseover', function BotaoVoltar(){

    iconeCasa.classList.replace("bi-house", "bi-house-fill");
});
iconeCasa.addEventListener("mouseout", function() {
    iconeCasa.classList.replace("bi-house-fill", "bi-house");

})

