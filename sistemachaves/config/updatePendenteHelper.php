<?php 
session_start();
include_once 'updatePendente.php';

if(isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    if ($tipo === 'updatePendente'){
        atualizar();
    }
}

function atualizar() {
    $idChave = $_POST['idChave'];
    $atualizar = new Update($idChave);
    $atualizar->atualizarPendente();
    header('Location: ../Funcionario/Pendente.php');
}