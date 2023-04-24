const btnVerde = document.querySelector('.botao_verde');
const btnVermelho = document.querySelector('.botao_red');


function alertBotoes(){
    alert('Em desenvolvimento');
}

btnVerde.addEventListener('click', alertBotoes);
btnVermelho.addEventListener('click', alertBotoes);

//add salas

const numeroSala = document.querySelector('.numero-sala');
const salvaSala = document.querySelector('.salvar-sala');
const tagPai = document.querySelector('.container_predios');

var i=1;
function criarSala(){
    pGerenciarSala.style.display = 'none';

    if(i!=1){
        alert('Criando ainda');
        pGerenciarSala.style.display = 'none';
    }
    i++;
}

salvaSala.addEventListener('click', criarSala);
