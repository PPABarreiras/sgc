<?php
session_start();
include_once 'login.php';

//Se o administrador já estiver logado, redireciona-o para a página de gerenciamento
if (isset($_SESSION["logado"]) && $_SESSION["logado"] === true) {
    header("location: ../Funcionario/Home.php");
    exit;
}

if(isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    if ($tipo === 'logarAdm'){
        loginAdm();
    }
}
//Captura os inputs inseridos e encaminha-os para a de Sessão
function loginAdm() {
    $matricula = trim($_POST['matricula']);
    $senha = trim($_POST['senha']);
    $sessaoAdm = new Sessao($matricula, $senha);
    $sessaoAdm->logarAdm();
}