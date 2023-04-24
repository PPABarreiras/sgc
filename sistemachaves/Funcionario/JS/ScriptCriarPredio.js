const btnAbrir = document.querySelector('.Container_Predio_Adicionar');
const btnSalvar = document.querySelector('.button_salvar_predio_novo');
const btnFecha = document.querySelector('.button_Adicionar_Predio_Fecha');
var NovoIdChave = document.querySelector('.IdNovoPredio');
let TPrediosExistentes = document.querySelectorAll('.Container_Predio_Numero');
let PrediosExistentes = document.querySelectorAll('.Container_Predio_Numero')

function AbrirP() {
    document.querySelector('.ConteinarPopupAdicionarPredio').style.display = 'flex';
    document.querySelector('.PopupAdicionarPredio').style.opacity = '1';
}

function FechaP() {
    document.querySelector('.ConteinarPopupAdicionarPredio').style.display = 'none';
    document.querySelector('.PopupAdicionarPredio').style.opacity = '0';
}

btnAbrir.addEventListener('click', (e) => {
    e.preventDefault();
    AbrirP();
    
    btnSalvar.addEventListener('click', (j) => {
        j.preventDefault();

        NovoIdChave = NovoIdChave.value;

        if (NovoIdChave == ""){
            alert('Defina uma numeração para o prédio!');
            document.querySelector('.IdNovoPredio').value = '';
            document.querySelector('.IdNovoPredio').focus();
        }
        for (let i = 0; i < PrediosExistentes.length; i++){
            var aux = TPrediosExistentes[i].innerHTML;
            if (NovoIdChave == aux){
                alert('Prédio já existente!');
                document.querySelector('.IdNovoPredio').value = "";
                document.querySelector('.IdNovoPredio').focus();
            } else {
                const linhaPredios = document.querySelector('.line_predios_link');
                const predio = document.createElement("div");
                var idPredioF = parseInt(NovoIdChave);
                predio.innerHTML = `<div class="Container_Predio">
                                        <a href="sala.html">
                                        <div class="Container_Predio_infor">
                                            <h4>Prédio</h4>
                                            <h4>${idPredioF}</h4>
                                        </div>
                                        <img src="/img/Prédio.png" alt="Prédio">
                                        </a>
                                        </div>`;
                linhaPredios.appendChild(predio);
                var IdPredio = parseInt(NovoIdChave);
                alert("Prédio " + NovoIdChave +" adicionado ao sistema!");
                document.querySelector('.IdNovoPredio') = '';

                document.querySelector('.ConteinarPopupAdicionarPredio').style.display = 'none';
                document.querySelector('.PopupAdicionarPredio').style.opacity = '0'; 
            }
        }
    });

    btnFecha.addEventListener('click', (j) => { 
        FechaP();
    });
});
