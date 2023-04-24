var excluir_chave = document.querySelector('#excluir-chave');
var fechaPopup = document.querySelector('.button_add_chave')
var enviarExcluir = document.querySelector('.add-chave');
var janelaExcluir = document.querySelector('.PopupAddChave');
var divBack = document.querySelector('.conteiner_lista_opcoes');

function fecharJanela(){
    janelaExcluir.style.display = 'none';
    divBack.style.display = 'flex';
}

function abrirJanela(){
    janelaExcluir.style.display = 'flex';
    divBack.style.display = 'none';
}

$(document).ready(function() {
    $(janelaExcluir).click(function () {
        $(janelaExcluir).slideToggle();
    })
})

excluir_chave.addEventListener('click', abrirJanela);

fechaPopup.addEventListener('click', fecharJanela);