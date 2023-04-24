var botaoReceber = document.querySelector(".botao-chave");

var chavePendente = document.querySelector(".container-pendente");

// botaoReceber.addEventListener('click', receberChave);


function receberChave() {
    var receberSN = confirm('Deseja receber a chave?');

    if(receberSN == true) { 
        chavePendente.style.display = "none";
    }
}