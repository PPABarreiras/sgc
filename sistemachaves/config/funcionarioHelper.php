<?php
session_start();
include_once 'funcionario.php';

if(isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    if ($tipo === 'cadastrarFuncionario'){
        cadastrar();
    }
}

function cadastrar() {
    $nome = $_POST['nome'];
    $tipo_func = $_POST['tipo_func'];
    $matricula = $_POST['matricula'];
    $senha = $_POST['senhaFinal'];
    $email = $_POST['email'];

    if ($tipo_func == 'administrador') {
    
    $usuario = new Usuario($nome, $tipo_func, $matricula, $senha, $email);
    $usuario->inserirAdministrador();
}
else {
    $usuario = new Usuario($nome, $tipo_func, $matricula, $senha, $email);
    $usuario->inserirCliente();
}
header('Location: ../Funcionario/Cadastro-funcionario.php');
}