const inputs = document.querySelectorAll('.input');
const botaoEntrar = document.querySelector('.botao-entrar');
const verificarTamanhoInput = () => {
    const [matricula, senha] = inputs;
    if(matricula.value.length >=8 && senha.value != "") {
        botaoEntrar.removeAttribute('disabled');
    }
    else {
        botaoEntrar.setAttribute('disabled', '')
    }
}
inputs.forEach((input) => input.addEventListener('input', verificarTamanhoInput));