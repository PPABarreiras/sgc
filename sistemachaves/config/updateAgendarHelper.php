<?php 
session_start();
include_once 'updateAgendar.php';

if(isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
    if ($tipo === 'updateAgendar'){
        atualizar();
    }
}

function atualizar() {
    $idChave = $_POST['idChave'];
    $nome_cliente = $_POST['nome_cliente'];
    $data_agendamento = $_POST['data_agendamento'];
    
    $atualizar = new Update($idChave, $nome_cliente, $data_agendamento);
    $atualizar->atualizarAgendamento();
    header('Location: ../Funcionario/Agendamento.php');
}