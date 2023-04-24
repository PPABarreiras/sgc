//CADASTRO DE CHAVES
/*const formCadastro = document.querySelector('.form1_cad_Chaves');
const button = document.querySelector('.form1_cad_Chaves div');
const formsChave = document.querySelectorAll('#formChave');
const buttonFechaCad = document.querySelector('#fechaCadastro');
var aux;
formsChave.forEach((element, index)=>{
    element.classList.remove('active');
    button.addEventListener('click', ()=>{
        element.classList.toggle('active');
        aux = index;      
    });
})*/

const formCadastro = document.querySelector(".form1_cad_Chaves");
const botao_cadastro = document.querySelector("#botao-cadastro1");
const formsChave = document.querySelectorAll("#formChave");
const buttonFechaCad = document.querySelector("#fechaCadastro");

const botao_salvar = document.querySelector("#SubmitAddChave");

const botao_alt_chave = document.querySelector("#SubmitAlterarPredio");

const botao_excluir_chave = document.querySelector("#SubmitExcluirPredio");

const formAlterar = document.querySelector(".form2_alt_Chaves");
const botao_alterar = document.querySelector("#botao-alterar1");

const botao_excluir = document.querySelector("#botao-excluir1");

const formExcluir = document.querySelector(".form3_excl_Chaves");
const parteFora = document.querySelector(".Main_Cont2");


/**Abre o formulário de inserir chave */
$(document).ready(function() {
    $(botao_cadastro).click(function () {
      $(botao_cadastro).hide();
      $(formAlterar).hide("slow/1000/fast");
      $(formExcluir).hide("slow/1000/fast");
      $(formCadastro).slideToggle("slow/400/slow").delay("slow");
      $(botao_alterar).show();
        $(botao_excluir).show();
    });
});

/**Fecha o formulário de cadastrar chave */
$(document).ready(function () {
    $(botao_salvar).click(function () {
        $(formCadastro).hide();
        $(botao_cadastro).show();
    })
})

/**Abre o formulário de alterar chaves*/
$(document).ready(function () {
  $(botao_alterar).click(function () {
    $(botao_alterar).hide();
    $(formExcluir).hide("slow/1000/fast");
    $(formCadastro).hide("slow/1000/fast");
    $(formAlterar).slideToggle("slow/400/slow").delay("slow");
    $(botao_cadastro).show();
    $(botao_excluir).show();
  })
})

/**Fecha o formulário de alterar chaves */
$(document).ready(function () {
  $(botao_alt_chave).click(function () {
    $(formAlterar).hide();
    $(botao_alterar).show();
  })
})


//Abre o formulário para excluir chave
$(document).ready(function () {

  $(botao_excluir).click(function () {
    $(botao_excluir).hide();
    $(formCadastro).hide("slow/1000/fast");
    $(formAlterar).hide("slow/1000/fast");
    $(formExcluir).slideToggle("slow/400/slow").delay("slow");
    $(botao_alterar).show();
    $(botao_cadastro).show();
  });
});

//Fecha o formulário excluir chave
$(document).ready(function () {
  $(botao_excluir_chave).click(function () {
    $(formExcluir).hide();
    $(botao_excluir).show();
  })
})

// Pop para inserir os novos dados da chave que vai ser alterada.
