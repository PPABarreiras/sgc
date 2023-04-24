const btn_gerenciar_sala = document.querySelector('#gerenciar-sala');
const popupAdicionarsala = document.querySelector('.PopupAdicionarsala');
const fecharJanela = document.querySelector('.button_Adicionar_sala_Fecha');

const pGerenciarSala = document.querySelector('.PopupAddsala');
const fecharJanelaAdd = document.querySelector('.button_Add_sala_Fecha');
const addSala = document.querySelector('#botao-add');

var PopupExcluirsala = document.querySelector('.PopupExcluirsala');
var btn_excluir_fecha = document.querySelector('.button_Excluir_sala_Fecha');
var numeroExcluir = document.querySelector('.numero-sala');
var botaoAbrirExcluir = document.querySelector('#botao-clear');

var salvar_excluir = document.querySelector('salvar-sala');

var excluir_Sala = document.querySelector('.excluir-sala');

//funcoes apenas para abertura e fechamento das popup
function openWindow(){
    popupAdicionarsala.style.display = 'flex';
}

function closeWindow(){
    popupAdicionarsala.style.display = 'none';
}

function openWindowPopUp2(){
    popupAdicionarsala.style.display = 'none';
    pGerenciarSala.style.display = 'flex';
}

function closeWindowPopUp2(){
    popupAdicionarsala.style.display = 'flex';
    pGerenciarSala.style.display = 'none';
}

function openWindowPopUp3(){
    PopupExcluirsala.style.display = 'flex';
    pGerenciarSala.style.display = 'none';
    popupAdicionarsala.style.display = 'flex';
}

function closeWindowPopUp3(){
    PopupExcluirsala.style.display = 'none';
 
}


fecharJanela.addEventListener('click', closeWindow);
btn_gerenciar_sala.addEventListener('click', openWindow);

addSala.addEventListener('click', openWindowPopUp2);
fecharJanelaAdd.addEventListener('click', closeWindowPopUp2);

btn_excluir_fecha.addEventListener('click', closeWindowPopUp3);
botaoAbrirExcluir.addEventListener('click', openWindowPopUp3);


function excluirSala(){
    alert('Não funciona ainda');
}

excluir_Sala.addEventListener('click', excluirSala);