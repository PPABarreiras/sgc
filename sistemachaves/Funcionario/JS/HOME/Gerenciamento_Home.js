function PopusHome(){ //Todos os popus da home

    var POPUPS = document.querySelector('.POPUPS');
    var div_PopupCadPredios = document.querySelector('.PoPuCadastroPredio'); // Cadastro
    var div_PopupExcluirPredios = document.querySelector('.PoPuExcluirPredio') // Delete
    var div_PopupAgendarChave = document.querySelector('.PoPuAgendarChave') // Agendar
    var div_PopupRetirarChave = document.querySelector('.PoPuRetirarChave') // Agendar
    var div_PoPuAlterarChave = document.querySelector('.PoPuAlterarChave') // Agendar


    //Cadastro
    function PopupCadPredio(){
        var buttonCadPredio = document.querySelector('.Cadastr_Predio');
        var buttonFechaAddPredio = document.getElementById('FechaAddPredio');
        var buttonSalvarPredio = document.getElementById('SubmitAddPredio');

        buttonCadPredio.addEventListener('click', ()=>{ // Botão abrir
            /*Blur*/
            POPUPS.style.display = 'flex';
            POPUPS.classList.add("active");
            /*O que será aberto*/
            div_PopupCadPredios.style.display = "flex";
            div_PopupCadPredios.classList.add("active");
            /*O que será oculto*/
            div_PopupExcluirPredios.style.display = "none";
            div_PopupAgendarChave.style.display = "none";
            div_PopupRetirarChave.style.display = "none";
            div_PoPuAlterarChave.style.display = "none";
        });
        
        buttonSalvarPredio.addEventListener('click', ()=>{ // Botão Salvar
            /*Blur*/
            POPUPS.style.display = 'none';
            POPUPS.classList.remove("active");
            /*O que será aberto*/   
            div_PopupCadPredios.style.display = "none";
            div_PopupCadPredios.classList.remove("active");
        });
        
        buttonFechaAddPredio.addEventListener('click', ()=>{ // Botão Fecha
            /*Blur*/
            POPUPS.style.display = 'none';
            POPUPS.classList.remove("active");
            /*O que será aberto*/
            div_PopupCadPredios.style.display = "none";
            div_PopupCadPredios.classList.remove("active");
        });
    }
    PopupCadPredio();

    function PopupExcluirPredio(){
        var buttonExcPredio = document.querySelector('.Apagar_Predio');
        var buttonFechaExclPredio = document.getElementById('FechaExcPredio');
        var buttonExcluirPredio = document.getElementById('SubmitExcPredio');

        buttonExcPredio.addEventListener('click', ()=>{ // Botão abrir
            /*Blur*/
            POPUPS.style.display = 'flex';
            POPUPS.classList.add("active");
            /*O que será aberto*/
            div_PopupExcluirPredios.style.display = "flex";
            div_PopupExcluirPredios.classList.add("active");
            /*O que será oculto*/
            div_PopupCadPredios.style.display = "none";
            div_PopupAgendarChave.style.display = "none";
            div_PopupRetirarChave.style.display = "none";
            div_PoPuAlterarChave.style.display = "none";

        });
        
        buttonExcluirPredio.addEventListener('click', ()=>{ // Botão Salvar
            /*Blur*/
            POPUPS.style.display = 'none';
            POPUPS.classList.remove("active");
            /*O que será aberto*/   
            div_PopupExcluirPredios.style.display = "none";
            div_PopupExcluirPredios.classList.remove("active");
        });
        
        buttonFechaExclPredio.addEventListener('click', ()=>{ // Botão Fecha
            /*Blur*/
            POPUPS.style.display = 'none';
            POPUPS.classList.remove("active");
            /*O que será aberto*/
            div_PopupExcluirPredios.style.display = "none";
            div_PopupExcluirPredios.classList.remove("active");
        });
    }
    PopupExcluirPredio();

}

PopusHome();
