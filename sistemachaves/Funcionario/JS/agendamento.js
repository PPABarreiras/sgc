var botaoReceber = document.querySelector(".botao-chave");

var chavePendente = document.querySelector(".container-pendente");
var icone = document.querySelector("#icone-entregar");

// botaoReceber.addEventListener('click', receberChave);


function receberChave() {
    var receberSN = confirm('Deseja entregar a chave?');

    if(receberSN == true) { 
        chavePendente.style.display = "none";
    }
}
function mudarCor() {
    icone.style.color = '#00FF0A';
}
function voltarCor() {
    icone.style.color = '#fff';
}
botaoReceber.addEventListener('mouseover', mudarCor);
botaoReceber.addEventListener('mouseout', voltarCor);