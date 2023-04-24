const inputs = document.querySelectorAll('.input');
const botaoEntrar = document.querySelector('.botao-entrar');
const verificarTamanhoInput = () => {
    const [nome, matricula, email, senha, confirmar_senha] = inputs;
    if(matricula.value.length >=8 && nome.value != "" && senha.value != "" && confirmar_senha.value != "" && email.value != "") {
        botaoEntrar.removeAttribute('disabled');
    }
    else {
        botaoEntrar.setAttribute('disabled', '')
    }
}

function validarSenha(senha, confirmar_senha) {
    var senha = document.getElementById('senha');
    var confirmar_senha = document.getElementById('confirmar_senha')
    if (senha.value != confirmar_senha.value) {
      confirmar_senha.setCustomValidity("Senhas diferentes!");
    } else {
      confirmar_senha.setCustomValidity("");
    }
  }
inputs.forEach((input) => input.addEventListener('input', verificarTamanhoInput));
